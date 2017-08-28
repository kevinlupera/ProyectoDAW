<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'sha.php';
        $clave="clave".'</br>';
        echo 'clave:'.$clave.'</br>';
        $claveEncri=Sha::encryption($clave);
        echo 'clave Encriptada:'.$claveEncri.'</br>';
        $claveDesen=Sha::decryption($claveEncri);
        echo 'clave Encriptada:'.$claveDesen;
        ?>
    </body>
</html>
