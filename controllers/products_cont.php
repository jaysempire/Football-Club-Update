<?php 
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email: ezra00100@gmail.com
	#   Date created: 26/12/2024 
	#   Date modified: 28/12/2024 

	include_once('models/Product.php');

	$product = new Product;
	$product_arr = [];
	
	if (isset($_POST['btn_submit'])) {
        $prod_name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $quantity = $_POST['product_quantity'];

		if( $prod_name && $price && $quantity ){

			$count = $product->getCount([]);
				//to do: set pass to true	
			for ($i=0; $i < 5; $i++) { 
				$next_id = (int)$count + 1;
				$ref_no = 'duza-' . date('y') . '-P' . str_pad($next_id, max(4, strlen($next_id)), '0', STR_PAD_LEFT); // function

				if (!$product->getRefNo([$ref_no])) {
					$passed = true;
					break;
				}
			} 

			$dt_01 = [$ref_no, $prod_name , $price , $quantity];

			if($product->addNew($dt_01)){
				$msg = $web_app->showAlertMsg( 'success', 'Product Successfully Added!' ); 
			}
			else{
				$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Product Not Added!' ); 
			}
		}
		else{
			$msg = $web_app->showAlertMsg( 'danger', 'Please, Enter Required Fields!' ); 
		}
	}

	elseif (isset($_POST['upload_btn'])) {

		$id = $_POST['product_id'];
		$product_arr = $product->getById([$id]);

		if (!$product_arr) {
			$_SESSION['msg'] = $web_app->showAlertMsg('danger', 'Product not found!');
			header('Location: ./products');
			exit();
    	}
			
		$ref_no = $product_arr['product_num'];
		$file_name = $product_arr['img'] ?? '';

		if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {

			$file_base_name = $ref_no;

			if (!empty($file_name)) {
				
				$existing_img_path = "$upload_dir/products/" . $file_name;

				if (file_exists($existing_img_path)) {
					unlink($existing_img_path);
				}
			
			}

			$file_upload = $product->fileUpload("$upload_dir/products", $_FILES['product_image'], $file_base_name);

			if ($file_upload['status']) {
				$file_name = $file_upload['file_name'];

				$dt = [$file_name, $ref_no];
				$product->updateImg($dt);

				$_SESSION['msg'] = $web_app->showAlertMsg('success', 'Product Image Successfully Updated!');
			} else {
				$_SESSION['msg'] .= $web_app->showAlertMsg('error', $file_upload['msg']);
			}

			header('Location: ./products');
			exit();

		} else {
			$msg = $web_app->showAlertMsg('danger', 'No image selected or upload error.');
		}
	}

	$product_arr = $product->getAll([]);

	//products interface
	include_once( 'views/products.php' );  
?>