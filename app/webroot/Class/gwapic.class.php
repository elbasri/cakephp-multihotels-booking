<?php
/*
                                                                      
      .-      .-                      .-:::-.`                        
     `NM:    .MM.                     yMMNNMMMmo`                     
     +MMd`   hMMs   .--.`  `..     ...yMM.  .sMMs `--.`     .--.`+.   
     dMMMo  /MMMN` yNmmNMm+-mMd- `yMN/yMM.   :MMysNmmNMm+`sNMmmMMMy`  
    -MMdMN.`mMdMM/ ``.-:yMM-`sMMyNMh. yMMsooyNMm.``.--sMMmMN:  :MMy   
    yMM`yMhyMm`mMd:hNNmdmMM/  /MMMs   yMMdhhyo: .yNNmdmMMNMMo``+MMs   
   `NMy `mMMN- +MMMMh`  /MM/ /NMmMMs` yMM.      NMd`  :MMooMMMMMd+`   
   +MM:  :MM+  .NMMMNo+sNMMsyMN+ -mMm:yMM.      dMNs+smMMmMMdoyyso-   
   +so    +o    +so+syso-/ysso.   `oso+so`       /syyo-:ys+oso++hMM:  
                                                         .dms++odMN.  
                                                         `/oyhhhs/` 
														 
														 
  // Gwapic - Google Weather API Class
 // Version : 1.01
//////////////////////////////////////////*/
																								  

//// Class requirement */
require_once 'simplexml_gwapic.class.php';

//// Start the Gwapic class
class Gwapic
{
	//// Setting the default vars */
	// Don't touch these vars except the API key vars */
	
	/* Location of Google Weather API */
	public $GoogleWeatherAPIURL = 'http://www.google.com/ig/api?weather=';
	
	/* API key for Webcams.travel */
	public $WebcamsAPIKey = '2d6174d3f301e435f5336f6759ec5d1b';
	// If you wish, you can get your own key for free at : http://www.webcams.travel/developers/
	
	/* Default mesure unit °C or °F */
	public $MeasureUnit = 'Auto';
	
	/* Using custom icons */
	public $CustomIcons = false;
	
	/* Location */
	public $Location = '';
	
	/* Using Day/Night Icons */
	public $DayNightIcons = false;
	
	/* Language */
	public $Language = 'Auto';
	
	/* Container for weather data */
	public $ArrayContainer = '';
	
	/* Array for the Webcams list informations */
	public $WebcamNearByInfos = '';
	
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	
	//// Function to get Weather */
	public function GetWeatherData($Location = "")
	{
		/* We don't call the Geolocating service for nothing */
		if($Location == 'Auto' || $this->MeasureUnit == 'Auto' || $this->Language == 'Auto')
		{
			/* Geolocate the visitor */
			$GeoLocateArray = $this->GeoLocateIP();
		}
		
		/* Action if $Location i set to Auto */
		if($Location == 'Auto')
		{
			$this->Location = $GeoLocateArray['City'] . "," . $GeoLocateArray['Country'];
		}
		else
		{
			$this->Location = $Location;
		}
		
		/* Action if $this->Language is set to Auto */
		
		if($this->Language == 'Auto')
		{
			$Lang = explode(';', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
   			$Lang = explode(',', $Lang['0']);
			
			if(preg_split("/-/", $Lang[0], $Var))
			{
				$this->Language = $Var[1];
			}
			else if($Lang[0])
			{
				$this->Language = $Lang[0];
			}
			else
			{
				$this->Language = 'en';
			}
		}
		
		/* Build the URL */
		$URL = $this->GoogleWeatherAPIURL . $this->URLEncoder($this->Location) . '&hl=' . $this->Language;
					
		$XML = new simplexml();
		$Result = $XML -> xml_load_file($URL, 'array');
		
		$ReturnedData = array();
		$MainArray = array();
		
		$MainArray = $Result['weather'];
				
		/* ForeCast */
		$FCInfos = array();
	
		$FCInfos = $MainArray['forecast_information'];

		$ReturnedData['ForeCast']['City'] = $FCInfos['city']['@attributes']['data'];
		$ReturnedData['ForeCast']['Zip'] = $FCInfos['city']['@attributes']['data'];
		$ReturnedData['ForeCast']['Date'] = $FCInfos['city']['@attributes']['data'];
		$ReturnedData['ForeCast']['DateTime'] = $FCInfos['city']['@attributes']['data'];
				
		/* Current Weather */
		$CWeather = array();
		$CWeather = $MainArray['current_conditions'];
		$ReturnedData['CurrentWeather']['Condition'] = $CWeather['condition']['@attributes']['data'];
		if($this->MeasureUnit == "Auto" || $this->MeasureUnit == "")
		{
			if($GeoLocateArray)
			{
				/* The list of the country using the °F */
				$CountryUseF = array('UNITED STATES', 'BELIZE', 'JAMAICA');
				
				if(in_array($GeoLocateArray['Country'], $CountryUseF))
				{
					$ReturnedData['CurrentWeather']['TempF'] = $CWeather['temp_f']['@attributes']['data'];
					$this->MeasureUnit = "F";
				}
				else
				{
					$ReturnedData['CurrentWeather']['TempC'] = $CWeather['temp_c']['@attributes']['data'];
					$this->MeasureUnit = "C";
				}
			}
			else
			{
				$ReturnedData['CurrentWeather']['TempF'] = $CWeather['temp_f']['@attributes']['data'];
				$this->MeasureUnit = "F";
			}
		}
		else if($this->MeasureUnit == "F")
		{
			$ReturnedData['CurrentWeather']['TempF'] = $CWeather['temp_f']['@attributes']['data'];
		}
		else if($this->MeasureUnit == "C")
		{
			$ReturnedData['CurrentWeather']['TempC'] = $CWeather['temp_c']['@attributes']['data'];
		}
		$ReturnedData['CurrentWeather']['Humidity'] = $CWeather['humidity']['@attributes']['data'];
		$ReturnedData['CurrentWeather']['Wind'] = $CWeather['wind_condition']['@attributes']['data'];
		
		/* If custom icons enabled */
		if ($this->CustomIcons == true || $this->CustomIcons != '') 
		{
			if($this->DayNightIcons == true || $this->DayNightIcons != '')
			{
				$TimeOfLocation = $this->GetTime($this->Location);
				$NowTime = ereg_replace('[^0-9]', '', $TimeOfLocation['Now']);
				$SunRise = ereg_replace('[^0-9]', '', $TimeOfLocation['SunRise']);
				$SunSet = ereg_replace('[^0-9]', '', $TimeOfLocation['SunSet']);
				
				if($NowTime > $SunRise && $NowTime < $SunSet)
				{
					/* It's the day, so I show the day icon */
					$CustomIcon = $this->ProcessIconURL($CWeather['icon']['@attributes']['data']);
 					$ReturnedData['CurrentWeather']['Icon'] = $CustomIcon;
				}
				else
				{
					/* It's the night, so I show the night icon (if possible) */
					$CustomIcon = $this->ProcessIconURL($CWeather['icon']['@attributes']['data']);
 					//$ReturnedData['CurrentWeather']['Icon'] = $CustomIcon;
					
					/* If tou don't have one of these icon in your icon pack you can comment the corresponding condition. */
					if($CustomIcon == 'sunny')
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'clear_night';
					}
					else if($CustomIcon == 'chance_of_rain')
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'chance_of_rain_night';
					}
					else if($CustomIcon == 'partly_cloudy')
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'partly_cloudy_night';
					}
					else if($CustomIcon == 'mostly_sunny')
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'partly_cloudy_night';
					}
					else if($CustomIcon == "mostly_cloudy")
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'mostly_cloudy_night';
					}
					else if($CustomIcon == 'chance_of_storm')
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'chance_of_storm_night';
					}
					else if($CustomIcon == 'chance_of_tstorm')
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'chance_of_tstorm_night';
					}
					/* Example of commented condition */
					/*else if($CustomIcon == 'NightIconName')
					{
						$ReturnedData['CurrentWeather']['Icon'] = 'NightIconNameReplacement';
					}*/
					else
					{
						$ReturnedData['CurrentWeather']['Icon'] = $CustomIcon;
					}
					
					
				}
			}
			else
			{
				/* Only the basics icon showed (day) */
				$CustomIcon = $this->ProcessIconURL($CWeather['icon']['@attributes']['data']);
 				$ReturnedData['CurrentWeather']['Icon'] = $CustomIcon;
			}
		}
		else
		{
			$ReturnedData['CurrentWeather']['Icon'] = "http://www.google.com" . $CWeather['icon']['@attributes']['data'];
		}
		
		/* ForeCast Min/Max */
		
		$FCMinMax = array();
 		$FCMinMax = $MainArray['forecast_conditions'];

		for ($i = 0; $i < count($FCMinMax); $i++)
		{
			$ReturnedData['FCMinMax'][$i]['Day'] = $FCMinMax[$i]['day_of_week']['@attributes']['data'];

			if($this->MeasureUnit == 'Auto')
			{
				
			}
			else if ($this->MeasureUnit == 'C')
			{
				if($this->Language == 'en')
				{
					$ReturnedData['FCMinMax'][$i]['Low'] = $this->ConvertFtoC($FCMinMax[$i]['low']['@attributes']['data']);
					$ReturnedData['FCMinMax'][$i]['High'] = $this->ConvertFtoC($FCMinMax[$i]['high']['@attributes']['data']);
				}
				else
				{
					$ReturnedData['FCMinMax'][$i]['Low'] = $FCMinMax[$i]['low']['@attributes']['data'];
					$ReturnedData['FCMinMax'][$i]['High'] = $FCMinMax[$i]['high']['@attributes']['data'];
				}
			} 
			else if($this->MeasureUnit == 'F' || $this->MeasureUnit == '')
			{
				$ReturnedData['FCMinMax'][$i]['Low'] = $FCMinMax[$i]['low']['@attributes']['data'];
				$ReturnedData['FCMinMax'][$i]['High'] = $FCMinMax[$i]['high']['@attributes']['data'];
			}
			
			$ReturnedData['FCMinMax'][$i]['Condition'] = $FCMinMax[$i]['condition']['@attributes']['data'];
				
			if ($this->CustomIcons == true || $this->CustomIcons != "") 
			{
				$CustomIcon = $this->ProcessIconURL($FCMinMax[$i]['icon']['@attributes']['data']);
				$ReturnedData['FCMinMax'][$i]['Icon'] = $CustomIcon;
			}
			else
			{
				$ReturnedData['FCMinMax'][$i]['Icon'] = "http://www.google.com" . $CWeather['icon']['@attributes']['data'];
			}
		}
			
		$this->ArrayContainer  = $ReturnedData;
	}
	
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	
	
	//// Getting functions */
	
	/* Get Current Weather */
	public function GetCurrentWeather()
	{
		$Array = $this->ArrayContainer;
			
		unset($Array['FCMinMax']);
		unset($Array['ForeCast']);
			
		return $Array['CurrentWeather'];
	}
	
	/* Get ForeCast */
	public function GetForeCast()
	{
		$Array = $this->ArrayContainer;
			
		unset($Array['CurrentWeather']);
		unset($Array['ForeCast']);
	
		return $Array['FCMinMax'];
	}
	
	/* Get informations */
	public function GetInfos()
	{
		$Array = $this->ArrayContainer;
			
		unset($Array['CurrentWeather']);
		unset($Array['FCMinMax']);
			
		return $Array['ForeCast'];
	}
	
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	
	
	//// Getting Time */
	
	/* Get the LAT & LONG of the location */
	public function GetGeoCode($Location)
    {
		if($GetGeoCode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$this->URLEncoder($Location).'&sensor=false'))
		{
			$GetJSONOutPut = json_decode($GetGeoCode);

			$LAT = $GetJSONOutPut->results[0]->geometry->location->lat;
			$LONG = $GetJSONOutPut->results[0]->geometry->location->lng;

			return array("LAT" => $LAT, "LONG" => $LONG);
		}
		else
		{
			return false;
		}
	
    }
	
	/* Get the current time of the location */
	public function GetTime($Location)
    {
		$GeoCode = $this->GetGeoCode($Location);
        $URL = 'http://ws.geonames.org/timezone?lat='.$GeoCode["LAT"].'&lng='.$GeoCode["LONG"].'';
        $GetTimeData = file_get_contents($URL);
        $XML = simplexml_load_string($GetTimeData);
		preg_split("/ /", $XML->timezone->time, $VarTime);
		preg_split("/ /", $XML->timezone->sunrise, $VarSR);
		preg_split("/ /", $XML->timezone->sunset, $VarSS);
	    return array("Now" => $VarTime[1] ,"SunRise" => $VarSR[1], "SunSet" => $VarSS[1]);
    }
	
	
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	
	///// Treatement functions */
	
	/* Convert °Celsius to °Farenheit */
	function ConvertFtoC($DegF)
	{
		/* Change this value if you want decimals */
		$Precision = 0;
		$Precision = (integer)$Precision;
		$DegC = (float)(($DegF - 32) / 1.8 );
		return round($DegC, $Precision);
	}
	
	/* Get the icon name */
	function ProcessIconURL($URI)
	{
		preg_match("/\/ig\/images\/weather\/(.*).gif/i", $URI, $Var);
		return $Var[1];
	}
	
	/* Encode the URL for the request */
	function URLEncoder($URL)
	{	
		$URLWithEntities = htmlentities($URL, ENT_QUOTES, 'UTF-8');
		$FilterOne = preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', $URLWithEntities);
		$FilterTwo = preg_replace('~[^0-9a-z,]+~i', '+', $FilterOne);
		$Result = strtolower(trim($FilterTwo, ' '));
		unset($URLWithEntities); 
		unset($FilterOne); 
		unset($FilterOne);
		return $Result;
	}
	
	/* Get the visitor location */
	function GeoLocateIP()
	{
		$IPAdress = $_SERVER["REMOTE_ADDR"];
		
		$XML = new simplexml();
		
		$URL = "http://api.hostip.info/?ip=" . $IPAdress;
		
		$Result = $XML->xml_load_file($URL, 'array');
		
		if($Result['gml:featureMember']['Hostip']['gml:name'] && $Result['gml:featureMember']['Hostip']['countryName'])
		{
			return array("City" => $Result['gml:featureMember']['Hostip']['gml:name'], "Country" => $Result['gml:featureMember']['Hostip']['countryName']);
		}
		else
		{
			return false;
		}
	}
	
	/* Get the webcams near by the location */
	public function GetWebcamsNearBy($Location, $Radius = '0.2', $Unit  = 'deg', $Page  = '1', $PerPage  = '10')
	{
		if($Location == 'Same')
		{
			$Location = $this->Location;
		}
		
		$GeoCode = $this->GetGeoCode($Location);
		
		$XML = new simplexml();
		
		$URL = "http://api.webcams.travel/rest?method=wct.webcams.list_nearby&devid=". $this->WebcamsAPIKey . "&lat=" . $GeoCode["LAT"] . "&lng=" . $GeoCode["LONG"] . "&radius=" . $Radius . "&unit=" . $Unit . "&per_page=" . $PerPage . "&page=" . $Page . "&format=xml";
		
		$Result = $XML->xml_load_file($URL, 'array');
		
		if(is_array($Result))
		{
			$this->WebcamNearByInfos = array("Count" => $Result['webcams']['count'] ,"PerPage" => $Result['webcams']['per_page'], "Page" => $Result['webcams']['page']);
			return $Result['webcams']['webcam'];
		}
		else
		{
			return false;
		}
	}
	
	public function GetWebcamDetails($IDWebCam)
	{
		$XML = new simplexml();
		
		$URL = "http://api.webcams.travel/rest?method=wct.webcams.get_details&devid=". $this->WebcamsAPIKey . "&webcamid=" . $IDWebCam . "&format=xml";
		
		$Result = $XML->xml_load_file($URL, 'array');
		
		if(is_array($Result))
		{
			return $Result['webcam'];
		}
		else
		{
			return false;
		}
	}
	
	public function GetWebcamImage($IDWebCam)
	{
		return "http://images.webcams.travel/webcam/" . $IDWebCam . ".jpg";
	}
	
}
?>