<?php
class backendComplaints extends cmsBackend{  
    
    public $useDefaultOptionsAction = true;

    public function actionIndex(){ 
        
        $this->redirectToAction('log');
        
    }
    
    public function getBackendMenu(){
        return array(
            array(
                'title' => LANG_OPTIONS,
                'url' => href_to($this->root_url, 'options')
            ),            
        );
    }

}