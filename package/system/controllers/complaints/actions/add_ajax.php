<?php
class actionComplaintsAddAjax extends cmsAction {

    public function run(){
        
        if (!$this->request->isAjax()) { cmsCore::error404(); } 
	  
        $orfo    = $this->request->get('orfo');
        $url     = $this->request->get('url');
        $comment = $this->request->get('comment', false);  
		
        $author  = !cmsUser::isLogged() ?  cmsUser::getIp() : cmsUser::get('nickname');
        
        $form = $this->getForm('orfo'); 
        $data = $form->parse($this->request, true);
        $option = $this->loadOptions($this->name); 
        
        $errors = $form->validate($this, $data);

        if (!$errors){
            
            $data = ['orfo'    => $orfo,
					'url'      => $url,
					'author'   => $author,
					'comment'  => $comment,
					'date'     => date('Y-m-d H:i:s')
                        ];  

            $this->model->addComplaints($data);
            
            $messenger = cmsCore::getController('messages');
            
            $messenger->addRecipient($option['unotice'])
                      ->ignoreNotifyOptions()
                      ->sendNoticePM([
                            'content' => sprintf(LANG_COMPLAINTS_ADD_NOTICE, $data['url'], $data['orfo']),
                            'options' => ['is_closeable' => true],
            ]);   
			
            $this->cms_template->renderJSON([
                'errors'   => false,
                'callback' => 'complaintsAdded'
            ]);
        }else{
            $this->cms_template->renderJSON([
                'errors' => $errors
            ]);
        }
    }
}