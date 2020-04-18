<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];

	switch($mod){
		case 'post':
			require 'Controller/PostController.php';
			$post_controller = new PostController();
			switch($act){
				case 'list':
					$post_controller->index();
					break;
				case 'add':
					$post_controller->create();
					break;
				case 'add-process':
					$post_controller->store();
					break;
				case 'detail':
					$id = $_GET['id'];
					$post_controller->detail($id);
				case 'edit':
					$id = $_GET['id'];
					$post_controller->edit($id);
					break;
				case 'edit-process':
					$post_controller->update();
				case 'delete':
					$id = $_GET['id'];
					$post_controller->destroy($id);

				default;
					die('Action post not found');
				
				
			}

			break;
		default:
			die("Mod not found");
	
	}
 ?>