<?php 
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email: ezra00100@gmail.com
	#   Date created: 26/12/2024 
	#   Date modified: 28/12/2024  
	
	include_once('admin_auth.php');
	include_once('models/Player.php');

	$player = new Player();
	$states = Player::getState();
	$player_arr = [];

	//$player->createNewFolder($upload_dir);

	if (isset($_POST['btn_submit'])) {
		$fullname = $_POST[ 'full_name' ];
		$player_dob = $_POST[ 'dob' ];
		$email = $_POST[ 'email' ];
		$player_position = $_POST[ 'position' ];
		$player_jersey = $_POST[ 'j_num' ];
		$height = $_POST[ 'height' ];
		$weight = $_POST[ 'weight' ];
		$player_state = $_POST[ 'state' ];
		$player_stats = $_POST[ 'season_stats' ];
		/* $check = $_POST[ 'check' ] ?? '';
		$check = $check == 'on' ? true : false; */

		// file_name should be something unique, like player id/number etc
		//player refrence number

		
		if(/* $check && */ $fullname && $player_dob && $email && $player_position && $player_jersey && $height && $weight && $player_state && $player_stats ){
			
			// check player ref nummber - (player ref num, player image name)
			//string padding for ref no
			$passed = false;
			
			if (!$player->getEmail([$email])) {

				$count = $player->getCount([]);
				//to do: set pass to true	

				for ($i=0; $i < 5; $i++) { 
					$next_id = (int)$count + 1;
					$ref_no = 'duza-' . date('y') . '-P' . str_pad($next_id, max(4, strlen($next_id)), '0', STR_PAD_LEFT); // function

					if (!$player->getRefNo([$ref_no])) {
						$passed = true;
						break;
					}
				} 

				if (!$passed) {
					$msg = $web_app->showAlertMsg('danger', 'Please Try again.');
				}								
			}
			else{
					$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Email Already Exist!' ); 
			}

			if ($passed) {

				$file_name = $ref_no; 

				$dt_01 = [$ref_no, $fullname, $email, $player_dob, $height, $weight,  $player_position, $player_jersey, $player_state, $player_stats];

				if($player->addNew($dt_01)){

					$msg = $web_app->showAlertMsg( 'success', 'Player Successfully Added!' ); 

					$file_upload = $player->fileUpload("$upload_dir/photos", $_FILES['player_image'], $file_name );


					if ( $file_upload['status']) {
						//to do: update img by ref number
						$file_name = $file_upload['file_name'];
						$dt_02 = [$file_name, $ref_no];
						$player->updateImg($dt_02);
						$clear = true;
					}
					else {
						$msg .= $web_app->showAlertMsg( 'error', $file_upload['msg'] ); 
					}
				}
				else{
					$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Players Not Added!' ); 
				}
			}
			
		}
		else{
			$msg = $web_app->showAlertMsg( 'danger', 'Please, Enter Required Fields!' ); 
		}
	}

	elseif (isset($_POST['img_btn'])) {

		$id = $_POST['player_id'];
		$player_arr = $player->getById([$id]);

		if (!$player_arr) {
			$_SESSION['msg'] = $web_app->showAlertMsg('danger', 'Player not found!');
			header('Location: ./usersprofile');
			exit();
    	}
			
		$ref_no = $player_arr['player_ref_No'];
		$file_name = $player_arr['img'] ?? '';

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
				$file_name = $file_upload['file_name'];

				$dt = [$file_name, $ref_no];
				$player->updateImg($dt);

				$_SESSION['msg'] = $web_app->showAlertMsg('success', 'Player Image Successfully Updated!');
			} else {
				$_SESSION['msg'] .= $web_app->showAlertMsg('error', $file_upload['msg']);
			}

			header('Location: ./usersprofile');
			exit();

		} else {
			$msg = $web_app->showAlertMsg('danger', 'No image selected or upload error.');
		}

	}
	// else if : button search
	elseif (isset($_POST['search_btn'])) {
		
		$searched = $_POST['searched'];

		if (!$searched) {
			$msg = $web_app->showAlertMsg( 'danger', 'Please enter a search term!' ); 
        }

		$player_arr = $player->getSearched([$searched]);

		if (empty($player_arr)) {
			$msg = $web_app->showAlertMsg( 'danger', 'No matching players found!' ); 
			$player_arr = $player->getAll([]);
        }
	}

	else {
		$player_arr = $player->getAll([]);
	}

	if (!$player_arr) {
		$msg = $web_app->showAlertMsg( 'danger', 'Sorry, No Players found!' ); 
	}


	
	//home interface
	include_once( 'views/usersprofile.php' );
?>