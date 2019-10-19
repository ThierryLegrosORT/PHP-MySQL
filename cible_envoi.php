<?php
if (isset($_FILES['file']) and $_FILES['file']['error'] == 0) { // on teste si le fichier est bien envoyé
    if ($_FILES['file']['size'] <= 5000000) { // on teste la taille < 5Mo
        
        $filesInfo = pathinfo($_FILES['file']['name']);
        $extension_upload = $filesInfo['extension'];
        $auth_extensions = array('txt', 'doc', 'docx', 'rtf', 'pdf');
        if (in_array($extension_upload, $auth_extensions)) {
            
            move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . basename($_FILES['file']['name']));
            echo "L'envoie s'est bien déroulé.";
        } else{
            echo 'Unauthorised extension.';
        }
    }
}
