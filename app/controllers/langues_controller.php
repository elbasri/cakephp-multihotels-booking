<?php
class LanguesController extends AppController {

    var $name = 'Langues';
    var $components = array('Session');

    /*
    * Sélectionne une langue sur l'interface du site
    * @param 	string (2 char fr/de/en....)
    * @return	array
    **/
    function change($langue_code=null){
        // Pour garder la liste déroulante sur la langue courante
        $this->Session->Write('langue_code',$langue_code);
        // Ajoute le préfixe et change la langue en revenant à la racine du site
        $this->redirect('/'.$langue_code.'/');
    }

    /*
    * Liste des langues et crée un cache par langue
    * @param 	-
    * @return	array
    **/
    function liste(){
        $liste_langues = Cache::read('liste_langues_'.Configure::read('Config.langue_code'));
        // Si les langues ne sont pas en cache on fait la mise en cache
        if(empty($liste_langues)){
            $this->Langue->recursive = 0;
            $liste_langues = $this->Langue->find('all');
            Cache::write('liste_langues_'.Configure::read('Config.langue_code'),$liste_langues);
        }
        return $liste_langues;
    }

}
?>
