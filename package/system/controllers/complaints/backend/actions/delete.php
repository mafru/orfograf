<?php

class actionComplaintsDelete extends cmsAction {

    public function run($id){
      
        if(!$id) {cmsCore::error404();}        
        
        if(is_numeric($id)){
            
            $this->model->deleteComplaints($id);
            
        }
                
        if($id == 'clear'){
            
            $this->model->deleteComplaints();
            
        }
        
        $this->redirectBack();

    }
}
