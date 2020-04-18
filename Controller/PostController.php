<?php 
	require_once 'Models/Post.php';
	require_once 'Models/Category.php';
	require_once 'Models/User.php';

	class PostController{
		private $post_model;
		public function __construct(){
			$this->post_model = new Post();
		}
		public function index(){
			$post_model = new Post();
			$posts = $post_model->getAll();

			require_once 'Views/posts/list.php';
		}

		public function create(){
			$user_model = new User();
			$category_model = new Category();
			$categories = $category_model->getAll();
			$users = $user_model->getAll();
			require_once "Views/posts/add.php";
		}

		public function detail($id){
			$post = $this->post_model->find($id);
			require_once "Views/posts/detail.php";
		}

		public function edit($id){
			$user_model = new User();
			$category_model = new Category();
			$categories = $category_model->getAll();
			$users = $user_model->getAll();
			$post = $this->post_model->find($id);
			require_once "Views/posts/edit.php";
		}

		public function update(){
			$data = $_POST;
			$post_model = new Post();

			$data["content"] = htmlspecialchars($data["content"]);
			$result = $post_model->update($data);
			if($result){
				setcookie("success", "update thanh cong", time()+3);
				header("Location: index.php?mod=post&act=list");
			}else{
				setcookie("fail", "update khong thanh cong", time()+3);
				header("Location: index.php?mod=post&act=edit&id=" .$data["id"]);
			}
		}

		public function destroy($id){
			$result = $this->post_model->delete($id);
			if($result){
				setcookie("success", "Xoa thanh cong", time()+3);
			}else{
				setcookie("fail", "Xoa khong thanh cong", time()+3);
			}
			header("Location: index.php?mod=post&act=list");
		}

		public function store(){
			$data = $_POST;
			$post_model = new Post();

			$data["content"] = htmlspecialchars($data["content"]);
			$result = $post_model->add($data);
			if($result){
				setcookie("success", "Tao moi thanh cong", time()+3);
			}else{
				setcookie("fail", "tao moi khong thanh cong", time()+3);
			}

			header("Location: index.php?mod=post&act=list");
		}
	}
 ?>