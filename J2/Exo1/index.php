<?php 
    $tab=[];
    $tab2=[];
    
    /// INFOS
    if (isset($_POST['nom'])){
        $tab['nom'] = $_POST['nom'];
    }
    if (isset($_POST['prenom'])){
        $tab['prenom'] = $_POST['prenom'];
    }
    if (isset($_POST['email'])){
        $tab['email'] = $_POST['email'];
    }
    if (isset($_POST['tel'])){
        $tab['tel'] = $_POST['tel'];
    }
    if (isset($_POST['linkedin'])){
        $tab['linkedin'] = $_POST['linkedin'];
    }
    if (isset($_POST['bio'])){
        $tab['bio'] = $_POST['bio'];
    }

    if (isset($_POST["loisir1"])) {
        $tab2["loisir1"] = $_POST["loisir1"];
    };
    if (isset($_POST["loisir2"])) {
        $tab2["loisir2"] = $_POST["loisir2"];
    };
    if (isset($_POST["loisir3"])) {
        $tab2["loisir3"] = $_POST["loisir3"];
    };
    if (isset($_POST["loisir4"])) {
        $tab2["loisir4"] = $_POST["loisir4"];
    };
    
    if (isset($_POST["language"])) {
        $tab["language"] = $_POST["language"];
    };
    if (isset($_POST["lang"])) {
        $tab["lang"] = $_POST["lang"];
    };
    if (isset($_POST["frameworks"])) {
        $tab["frameworks"] = $_POST["frameworks"];
    };
    if (isset($_POST["software"])) {
        $tab["software"] = $_POST["software"];
    };
    if (isset($_POST["color"])) {
       $tab["color"] = $_POST["color"];
    };
    
    array_push($tab, $tab2);
    
?>