<?php
class backendComplaints extends cmsBackend{  
    
	public $useDefaultOptionsAction = true;
    protected $useOptions           = true;

	public function actionIndex(){
        $this->redirectToAction('log');
    }
    
    public function getBackendMenu(){
        return [
            [
                'title' => LANG_OPTIONS,
                'url'   => href_to($this->root_url, 'options')
            ]            
        ];
    }
}