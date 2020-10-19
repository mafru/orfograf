<?php
class actionComplaintsDelete extends cmsAction {

    public function run($id){
      
        if(!$id) {cmsCore::error404();} 
                   
        $this->model->deleteComplaints($id); 

        $this->redirectBack();
    }
}