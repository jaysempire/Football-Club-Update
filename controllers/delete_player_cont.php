<?php
    include_once('admin_auth.php');
    include_once('models/Player.php');	

    $player = new Player;

    $id = $_GET['id'] ?? 0;

    if ($id < 1) {
        header( 'Location: ./usersprofile', true, 301 );
        exit();
    }
    
    $player_del = $player->getById([$id]);
    
    $status = $player_del['status'] ?? null;
    
    if ($status == 0) {
        $delete_msg = 'Do You Want To Activate This Player?';
        $btn_msg = 'Activate Player';
        $btn_color = 'btn-success';
        $status_new = 1;
        $alert = 'Activated';
    }elseif ($status == 1) {
        $delete_msg = 'Do You Want To Deactivate This Player?';
        $btn_msg = 'Deactivate Player';
        $btn_color = 'btn-danger';
        $status_new = 0;
        $alert = 'Deactivated';
    }   
 
    if (isset($_POST['delete_btn'])) 
    { 
    
        if ( $player->updateById([$status_new, $id])) {
            $_SESSION['msg'] = $web_app->showAlertMsg( 'success', 'Player Successfully ' . $alert ); 
        }
        else {
            $_SESSION['msg'] = $web_app->showAlertMsg( 'danger', 'Deactivation Failed!' );   
        }
            
        header('Location: ./usersprofile');
        exit();
            
    }
    elseif (isset($_POST['cancel_btn'])) 
    {
        header( 'Location: ./usersprofile', true, 301 );
        exit();
    }

    

    if (!$player_del) {
         header( 'Location: ./usersprofile', true, 301 );
         exit();
     }

    include_once( 'views/delete-player.php' );

    
    