<?php
    include_once('models/Admin.php');

    $output = 0;
    if (isset($_POST['btn_submit'])) {
        $pass = $_POST['pass'];
        $enc = $_POST['enc'];

        if ($enc == 'BCRYPT') {
            $output = $admin->encPword( $pass );
        }
    }


    include_once( 'views/encryptionProject.php' );
    