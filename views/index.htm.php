<!DOCTYPE html>
<html lang="en">
<head>
	<title>xii</title>
	<link href="/css/kube.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
</head>

<body>

	<!-- HEADER -->
	<row around class="top">
        <h1>I guess, you are {{username}}</h1>
    </row>
	
	<? $headpost = $posts[0]; ?>
	<!-- NEW POST -->
	<row centered>
		<column cols="7" class="mainpost">
			<h1><a href="/<?=$headpost->getID()?>"><?=$headpost->getTitle()?></a></h1>
			<p><?=$headpost->getText()?></p>
		</column>
	</row>
	
	<!-- NEW POST CONTROLS -->
	<row centered>
        <column cols="7" >
			<row centered>
				<column cols="4">
					<a href="/edit/<?=$headpost->getID()?>" class="btn width-12" outline>Edit</a>
				</column>
				<column cols="4">
					<a href="" class="btn width-12" outline>Hide</a>
				</column>
				<column cols="4">
					<a href="/<?=$headpost->getID()?>" class="btn width-12" outline>Comments(13)</a>
				</column>
			</row>
		</column>
	</row>
		
	<?php if (count($posts)>1): ?>
	<!-- POSTS -->
    <row centered>
        <column cols="7" class="post">
			<!-- POST -->
			<?php foreach(array_slice($posts,1) as $post): ?>
			<h2><a href="/<?=$post->getID()?>"><?=$post->getTitle()?></a></h2>
			<p><?= $post->getText() ?></p>
			<hr/>
			<!-- POST CONTROLS-->
			<row centered>
				<column cols="4">
					<a href="/edit/<?=$post->getID()?>" type="black" class="btn width-12" outline>Edit</a>
				</column>
				<column cols="4">
					<a href="" type="black" class="btn width-12" outline>Hide</a>
				</column>
				<column cols="4">
					<a href="/<?=$post->getID()?>" type="black" class="btn width-12" outline>Comments(13)</a>
				</column>
			</row>
			<?php endforeach; ?>
		</column>
    </row>
	<? endif; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</body>
</html>