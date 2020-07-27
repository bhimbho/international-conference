<?php
 

function display_session(){
    echo $session->get_session('success');
    echo $session->get_session('error');
    $session->unset_session('success');
}

?>