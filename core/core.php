<?php

function load ( $name, $options = null )
{
    $new_options = $options;
    include ( __core__ . "/core/themes/". $name . ".php" );
}

if( isset( $_GET['page'] )  == true ) {

    if( file_exists( __core__ . "/core/pages/" . $_GET['page'] . ".tpl" )  == true) {
        
        include_once ( __core__ . "/core/pages/" . $_GET['page'] . ".tpl" );

    } else {

        include_once ( __core__ . "/core/pages/404.tpl" );

    }
    
} else {

    include_once ( __core__ . "/core/pages/main.tpl" );

}