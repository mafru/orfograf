<?php
class formComplaintsOrfo extends cmsForm {
    
    public function init() {

        return [
            
            ['type' => 'fieldset', 
                   'childs' => [
            
                new fieldText('comment', [
                        'rules' => [['max_length', 300]],
                        'options'=> ['size' => 3, 'max_length' => 300, 'show_symbol_count' => true],
						'attributes' => ['placeholder' => LANG_COMPLAINTS_ORFO_TITLE]
                        ]
                ),
                    
                new fieldHidden('url', [                    
                        'rules' => [['required']]
                        ]
                ),
                
                new fieldHidden('author', []),  
					   
                new fieldHidden('orfo', [                        
                        'rules' => [['required'], ['max_length', 300]]
					]
                )
            
                ]
            ]
        ];
    }
}
