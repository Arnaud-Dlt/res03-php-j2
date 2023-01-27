<?php 

    echo $_GET["route"];
    
    if( $_GET["route"] === null || $_GET["route"] === ""){
        require 'home.phtml';
    }

    if($_GET["route"] === "about"){
        require 'about.phtml';
    }
    
    if($_GET["route"] === "contact"){
        require 'contact.phtml';
    }
?>