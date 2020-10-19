<?php
class onComplaintsBeforePrintHead extends cmsAction {

    public function run($head){
            
        $head->addTplJSFromContext('controllers/complaints/complaints');

    return $head;

    }
}