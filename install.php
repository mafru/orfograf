<?php function install_package(){

	return true;
	
}

function save_controller_options() {
    $controller_root_path = cmsConfig::get('root_path').'system/controllers/complaints/';
    $form_file = $controller_root_path.'backend/forms/form_options.php';
    cmsCore::loadControllerLanguage('complaints');
    $form = cmsForm::getForm($form_file, 'complaintsoptions', false);
    if ($form) {
        $options = $form->parse(new cmsRequest(cmsController::loadOptions('complaints')));
        cmsCore::getModel('content')->filterEqual('name', 'complaints')->updateFiltered('controllers', array(
            'options' => $options
        ));
    }
}

