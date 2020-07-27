<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();

 $session->unset_session('admin_id');
 $session->destroy_session();
 header('location:../index.php');