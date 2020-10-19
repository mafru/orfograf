<?php
class actionComplaintsLogAjax extends cmsAction {

    public function run(){      
        
        if (!$this->request->isAjax()) { cmsCore::error404(); }
        
        $grid = $this->loadDataGrid('log');    
                
        $model = cmsCore::getModel($this->name);
        
        $filter     = [];
        $filter_str = $this->request->get('filter', '');

        if ($filter_str) {
            parse_str( $filter_str, $filter );
            $this->model->applyGridFilter( $grid, $filter );
        }
        
        $total = $model->getComplaintsCount(); 
        $perpage = isset($filter['perpage']) ? $filter['perpage'] : admin::perpage;
        $pages = ceil($total / $perpage);
        
        $log = $this->model->getComplaints();

        cmsTemplate::getInstance()->renderGridRowsJSON($grid, $log, $total, $pages);

        $this->halt();
    }
}