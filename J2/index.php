<?php 
    $tab=[];
    
    
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
    if (isset($_POST['loisir1'])){
        $tab['loisir1'] = $_POST['loisir1'];
    }
    if (isset($_POST['loisir2'])){
        $tab['loisir2'] = $_POST['loisir2'];
    }
    if (isset($_POST['loisir3'])){
        $tab['loisir3'] = $_POST['loisir3'];
    }
    if (isset($_POST['loisir4'])){
        $tab['loisir4'] = $_POST['loisir4'];
    }
    
    /// LANGUES
    if (isset($_POST['Français'])){
        $tab['Français'] = $_POST['Français'];
    }
    if (isset($_POST['Anglais'])){
        $tab['Anglais'] = $_POST['Anglais'];
    }
    if (isset($_POST['Arabe'])){
        $tab['Arabe'] = $_POST['Arabe'];
    }
    if (isset($_POST['Breton'])){
        $tab['Breton'] = $_POST['Breton'];
    }
    if (isset($_POST['Espagnol'])){
        $tab['Espagnol'] = $_POST['Espagnol'];
    }
    
    /// LANGPROG
    
    if (isset($_POST['html'])){
        $tab['html'] = $_POST['html'];
    }
    if (isset($_POST['css'])){
        $tab['css'] = $_POST['css'];
    }
    if (isset($_POST['javascript'])){
        $tab['javascript'] = $_POST['javascript'];
    }
    if (isset($_POST['php'])){
        $tab['php'] = $_POST['php'];
    }
    if (isset($_POST['sql'])){
        $tab['sql'] = $_POST['sql'];
    }
    
    /// LOGICIELS
    
    if (isset($_POST['photoshop'])){
        $tab['photoshop'] = $_POST['photoshop'];
    }
    if (isset($_POST['illustrator'])){
        $tab['illustrator'] = $_POST['illustrator'];
    }
    if (isset($_POST['xd'])){
        $tab['xd'] = $_POST['xd'];
    }
    if (isset($_POST['figma'])){
        $tab['figma'] = $_POST['figma'];
    }
    
    /// COULEUR
    if (isset($_POST['color'])){
        $tab['color'] = $_POST['color'];
    }
    echo "<pre>";
    var_dump($tab);
    echo "</pre>";
?>