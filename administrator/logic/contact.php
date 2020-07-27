<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $contact = new contact();
 $validate = new validate();
if(isset($_POST['submit'])){
    $contact_phone = $validate->text($_POST['contact_phone']);
    $contact_address = $validate->text($_POST['contact_address']);
    $update_status = $contact->update_contact($contact_address, $contact_phone, $contact_id = 1);
    if($update_status){
        $session->set_session('success','Contact Updated Successfully');
    }else{
        $session->set_session('error','Information not Updated');
    } 
    header('location:../contact.php');
}

