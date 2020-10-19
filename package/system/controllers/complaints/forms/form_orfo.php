<?php
class formComplaintsOrfo extends cmsForm {
    
    public function init() {

        return [
            
            ['type' => 'fieldset', 
                   'title' => LANG_COMPLAINTS_ORFO_TITLE, 
                   'childs' => [
            
                new fieldText('comment', [
                        'rules' => [['max_length', 300]],
                        'options'=> ['size' => 5]
                        ]
                ),
                    
                new fieldHidden('url', [
                        'title' => LANG_COMPLAINTS_ORFO_TITLE,
                        'rules' => [['required']]
                        ]
                ),
                
                new fieldHidden('author', ['title' => LANG_COMPLAINTS_ORFO_TITLE]),  
					   
                new fieldHidden('orfo', [
                        'title' => LANG_COMPLAINTS_ORFO_ERROR, 
                        'rules' => [['required'], ['max_length', 300]]
					]
                )
            
                ]
            ]
        ];
    }
}