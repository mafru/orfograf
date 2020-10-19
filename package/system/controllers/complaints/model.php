<?php
class modelComplaints extends cmsModel{ 
    
    public function deleteController($id) {
        
        $this->db->dropTable('complaints');
    
        return parent::deleteController($id);
 
    }

    public function addComplaints($complaint){ 
       return $this->insert('complaints', $complaint);
    }

    public function getComplaints(){        
        return $this->get('complaints');            
    }

    public function getComplaintsCount(){        
        return $this->getCount('complaints');            
    }   

    public function deleteComplaints($id){
        
        if (is_numeric($id)){
            return $this->delete('complaints', $id); 
		} else{
            return $this->db->query('TRUNCATE TABLE `{#}complaints`');
        }       
    }      
}	