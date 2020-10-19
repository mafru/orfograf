<?php
function grid_log($controller){

    $options = [
        'order_by'      => 'id',
        'order_to'      => 'asc',
        'is_sortable'   => false,
        'is_pagination' => true,        
        'show_id'       => false,
		'is_filter' 	=> false,
    ];
    $columns = [
            'id' => [
                'title' => 'ID',
                'width' => 10
            ],                
            'orfo' => [
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_ERROR,                
                'href'  => '{url}'
            ],
            'comment' => [
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_COMMENT,
                'width' => 300
            ],
            'date' => [
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_DATE,
                'width' => 120
            ],
           'author' => [
                'title' => LANG_COMPLAINTS_ADMIN_TEXT_AUTHOR,
                'width' => 100
            ]
    ];

    $actions = [
        [
            'title'   => LANG_DELETE,
            'class'   => 'delete',
            'href'    => href_to($controller->root_url, 'delete', '{id}'),
            'confirm' => LANG_COMPLAINTS_CP_FORM_DELETE_CONFIRM
        ]
    ];

    return [
            'options' => $options,
            'columns' => $columns,
            'actions' => $actions
    ];
}