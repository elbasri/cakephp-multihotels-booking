<?php
    // Langues acceptées
    $langues = array(
                'fr' => 'fre',
                'en' => 'eng',
                'de' => 'deu',
                'it' => 'ita'
    );

    // Français par défaut
    $langue_code = 'fr';
    $langue = 'fre';

    // Analyse de l'URL
    if(!empty($_GET['url']))
    {
        if(strpos($_GET['url'], '/') !== false)
        {
             $langue_url = substr($_GET['url'], 0, strpos($_GET['url'], '/'));
        }
        else
        {
            $langue_url = $_GET['url'];
        }

        // Code langue accepté ?
        if(isset($langues[$langue_url]))
        {
            $langue_code = $langue_url;
            $langue = $langues[$langue_code];

            // On enlève le code langue et le slash au début de l'URL
            // avant qu'elle ne soit transmise au Router
            if(strlen($_GET['url']) > strlen($langue_url))
            {
                $_GET['url'] = substr($_GET['url'], strlen($langue_url));
            }else{
                $_GET['url'] = '/';
            }
        }
    }

    Configure::write('Config.langues',$langues);
    Configure::write('Config.language',$langue); // Config.language => nom var en anglais obligatoire pour fonctionnement de Cake
    Configure::write('Config.langue_code',$langue_code);

?>
