<?php
 
 function admin_autoloader_step_two(){
    /**
     * admin autoloader 
     * caller classes from admin directory
     */
    spl_autoload_register(function($class){
        include('../../classes/'.$class.'.class.php');
     });
    
 }
 function admin_autoloader_step_one(){
    /**
     * admin autoloader 
     * caller classes from admin directory
     */
    spl_autoload_register(function($class){
        include('../classes/'.$class.'.class.php');
     });
    
 }
 function admin_autoloader_no_step(){
    /**
     * admin autoloader 
     * caller classes from admin directory
     */
    spl_autoload_register(function($class){
        include('classes/'.$class.'.class.php');
     });
    
 }
 ?>