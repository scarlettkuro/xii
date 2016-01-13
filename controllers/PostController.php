<?php
class PostController {
	
	//return pages
	
	static function index() {
		set('posts', PostStorage::getPosts());
		return html('index.htm.php');
	}
	
	static function edit($id) {
		set('post', PostStorage::getPost($id));
		return html('edit.htm.php');
	}
	
	static function neew() {
		set('post', new Post(null));
		return html('edit.htm.php');
	}
	
	static function post($id) {
		set('post', PostStorage::getPost($id));
		return html('post.htm.php');
	}
	
	//Do action and redirect
	
	static function save($id) {
		
		$post = new Post($id);
		$post->setText($_POST['post_text']);
		$newid = PostStorage::savePost($post);
		redirect_to('/' . $newid);
	}
	
	static function remove($id) {
		PostStorage::removePost($id);
		redirect_to('/');
	}
}

?>
