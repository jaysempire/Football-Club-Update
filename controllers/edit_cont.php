<?php
    include_once('admin_auth.php');
	include_once('models/Player.php');	

    $player = new Player();
    $states = Player::getState();

    $id = $_GET['id'] ?? 0;

    $player_arr = $player->getById([$id]);

	$ref_no = $player_arr['player_ref_No'];
	$file_name = $player_arr['img'] ?? "";
	$new_image_name = $file_name;

    if (isset($_POST['btn_submit'])) {
        $fullname = $_POST[ 'full_name' ];
		$player_dob = $_POST[ 'dob' ];
		$email = $_POST[ 'email' ];
		$player_position = $_POST[ 'position' ];
		$player_jersey = $_POST[ 'j_num' ];
		$height = $_POST[ 'height' ];
		$weight = $_POST[ 'weight' ];
		$player_state = $_POST[ 'state' ];
		$player_stats = $_POST[ 'player_stats' ];
		$status = intval($_POST[ 'status' ]);
		$edit_img = $_POST['edit_image'] ?? 0;

        if($fullname && $player_dob && $email && $player_position && $player_jersey && $height && $weight && $player_state && $player_stats ){

			//image upload

			if (isset($edit_img) && $edit_img == '1') {

				if (isset($_FILES['player_image']) && $_FILES['player_image']['error'] === UPLOAD_ERR_OK) {

					$file_base_name = $ref_no;

					if (!empty($file_name)) {
						
						$existing_img_path = "$upload_dir/photos/" . $file_name;

						if (file_exists($existing_img_path)) {
							unlink($existing_img_path);
						}
					
					} 

					$file_upload = $player->fileUpload("$upload_dir/photos", $_FILES['player_image'], $file_base_name);

					if ($file_upload['status']) {
						$new_image_name = $file_upload['file_name'];
					} else {
						$_SESSION['msg'] .= $web_app->showAlertMsg('error', $file_upload['msg']);
					}
				}

			}

			$dt_01 = [ $fullname, $email, $player_dob, $height, $weight, $player_position, $player_jersey, $player_state, $player_stats, $status, $new_image_name, $id ];
			// check Email in db
		
			if($player->updatePlayer($dt_01)){
				$_SESSION['msg'] = $web_app->showAlertMsg( 'success', 'Player Successfully Updated!' ); 
                header('Location: ./usersprofile');
                exit();
			}
			else{
				$_SESSION['msg'] = $web_app->showAlertMsg( 'danger', 'Sorry, Players Not Added!' ); 
			}

            
		}
		else{
			$_SESSION['msg'] = $web_app->showAlertMsg( 'danger', 'Please, Enter Required Fields!' ); 
        }
    }

    include_once( 'views/edit.php' );