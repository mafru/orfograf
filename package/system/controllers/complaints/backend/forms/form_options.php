<?php
class formComplaintsOptions extends cmsForm {

    public function init() {

        return [

			[
			'type'   => 'fieldset',
			'title'  => LANG_CONFIG,
			'childs' => [                    
                    
				new fieldList('unotice', [
					'title'  => LANG_COMPLAINTS_CP_SEND_USER,
					'hint'   => LANG_COMPLAINTS_CP_SEND_USER_HINT,
					'default'=> 1,
					'generator' => function () {			
						$admins = [];
						$users_model = cmsCore::getModel('users');
						$users_list = $users_model->filterEqual('is_admin', 1)->getUsers();
						$admins = array_collection_to_list($users_list, 'id', 'nickname');
						return $admins;
						}
				])
			]],
        ];
    }
}