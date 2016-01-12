<?php

class PostStorage {
	
	private static $db_filename = 'database.json';
		
	static private function load() {
		$json = file_get_contents(self::$db_filename);
		return json_decode($json, true); 
	}
		
	static private function save($db) {
		file_put_contents ( self::$db_filename, json_encode($db));
	}
		
	static function getPost($id) {
		$db = self::load();
		$collection = $db['posts'];
		
		if (!array_key_exists($id,$collection))
			return null;
		
		$db_post = $collection[$id];
		
		$post = new Post($id);
		$post->setText($collection[$id]['text']);
		
		return $post;
	}
		
	static function getPosts() {
		$db = self::load();
		$collection = $db['posts'];
		$posts = array();
		
		foreach(array_keys($collection) as $id) {
			$db_post = $collection[$id];
			$post = new Post($id);
			$post->setText($collection[$id]['text']);
			array_push($posts,$post);
		}

		return $posts;
	}
	
	//add or update
	static function savePost($post) {
		$db = self::load();
		$db['posts'][$post->id] = array(
			'text' => $post->text,
		);
		self::save($db);
	}
	
	static function removePost($id) {
		$db = self::load();
		unset($db['posts'][$id]);
		self::save($db);
	}
	
}