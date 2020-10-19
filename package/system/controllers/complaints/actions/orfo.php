<?php
class actionComplaintsOrfo extends cmsAction {

    public function run(){
        
        if (!$this->request->isAjax()){cmsCore::error404();} 
       
        $orfo    = $this->request->get('orfo');
        $url     = $this->request->get('url');
        $author  = !cmsUser::isLogged() ? cmsUser::getIp() : cmsUser::get('nickname');  
        
        $data = ['orfo' => $orfo, 'url' => $url, 'author' => $author];
                       
        $form = $this->getForm('orfo');
    
		return $this->cms_template->render('orfo', ['form' => $form, 'data' => $data, 'errors' => false]);   
    }   
}