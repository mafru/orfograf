<?php
class onComplaintsBeforePrintHead extends cmsAction {

    public function run($head){
            
        $head->addJS("templates/{$head->name}/controllers/complaints/complaints.js");

    return $head;

    }

}
