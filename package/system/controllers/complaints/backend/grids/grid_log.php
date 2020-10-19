<?php

function grid_log($controller){

    $options = array(
        'order_by' => 'id',
        'order_to' => 'asc',
        'is_sortable' => true,
        'is_pagination' => true,        
        'show_id' => true
    );

    $columns = array(
            'id' => array(
                'title' => 'ID',
                'width' => 10
            ),                
            'orfo' => array(
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_ERROR,                
                'href'  => '{url}'
            ),
            'comment' => array(
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_COMMENT,
                'width' => 300
            ),
            'date' => array(
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_DATE,
                'width' => 120
            ),
           'author' => array(
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_AUTHOR,
                'width' => 100
            )
    );

    $actions = array(
        array(
            'title'   => LANG_DELETE,
            'class'   => 'delete',
            'href'    => href_to($controller->root_url, 'delete', '{id}'),
            'confirm' => LANG_COMPLAINTS_CP_FORM_DELETE_CONFIRM
        )
    );

    return array(
            'options' => $options,
            'columns' => $columns,
            'actions' => $actions
    );
}