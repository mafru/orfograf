<?php

class formComplaintsOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'title' => 'Настройка',
                'childs' => array(                    
                    
                    new fieldList('unotice', array(
                                'title'  => LANG_COMPLAINTS_CP_SEND_USER,
                                'hint'   => LANG_COMPLAINTS_CP_SEND_USER_HINT,
                                'default'=> 1,
                                'generator' => function () {			
                                    $admins = array();
                                    $users_model = cmsCore::getModel('users');
                                    $users_list = $users_model->filterEqual('is_admin', 1)->getUsers();
                                    $admins = array_collection_to_list($users_list, 'id', 'nickname');
                                    return $admins;
				}
                    )),

                )
            ),
        );

    }

}
