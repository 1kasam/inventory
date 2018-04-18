<?php

require_once'./core/config.php';
require_once('router.php');
//echo "Front Controller";


if (filter_input(INPUT_GET, 'url') == "") {

    $this_url = "index";
    
} else {

    $this_url = filter_input(INPUT_GET, 'url');
      
}



$url = explode('/', $this_url);

Router::get($url);


