<?php $this->addCSSFromContext($this->getTplFilePath('controllers/complaints/style.css', false));?>
<div id="complaints" style="width: 460px;">
        <?php if(!empty($data['orfo'])){ 
            ob_start(); ?>           
                <div class="text_error">
                    <span style="font-weight: bold;"><?php echo LANG_COMPLAINTS_ORFO_ERROR;?></span><br/>
                        <?php echo $data['orfo'];?>
                </div>                       
            <?php $prepend_html = ob_get_clean(); 
         }  
    $this->renderForm($form, $data, array(
            'action'  => $this->href_to('add_ajax'),
            'method'  => 'ajax',
            'toolbar' => false,
            'submit'  => array('class'=> 'button button_ok', 'title' => LANG_SEND),       
            'cancel'  => array('show' => true, 'href' => 'javascript:icms.modal.close()'),
            'prepend_html' => (isset($prepend_html) ? $prepend_html : '')            
        ), $errors);
?>  
</div>
