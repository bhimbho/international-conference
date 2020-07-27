<?php
class session{

    public function __construct(){
        session_start();
    }
    public function set_session($session_key, $session_value){
        $_SESSION[$session_key] = $session_value;
    }
    public function get_session($session_key){
        return $_SESSION[$session_key];
    }
    public function unset_session($session_key)
    {
        unset($_SESSION[$session_key]);
    }
    public function destroy_session()
    {
        session_destroy();
    }
    

}