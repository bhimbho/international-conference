<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $template = new template();
 $validate = new validate();
if(isset($_POST['submit'])){ 
    $uploadfile = $validate->fileUploadValidateDoc('../../uploads/templates/', 'template_file');
    // $file =  'file';
    $paper_template = $validate->text($_POST['paper_template']);
    $update_status = $template->update_template($paper_template,  $uploadfile);
    if($update_status){
        $session->set_session('success','Template Updated Successfully');
    }else{
        $session->set_session('error','Template not Updated');
    } 
    header('location:../paper-template.php');
}