<?php 
$this->addToolButton(array(
    'class'   => 'delete',
    'title'   => LANG_COMPLAINTS_CLEAR,
    'confirm' => LANG_COMPLAINTS_CLEAR_CONFIRM,
    'href'    => $this->href_to('delete', 'clear')
));

$this->renderGrid($this->href_to('log_ajax'), $grid); 