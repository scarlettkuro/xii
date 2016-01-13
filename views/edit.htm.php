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
	
	<form method = "POST">
	<!-- NEW POST -->
	<row centered>
		<column cols="7" class="post">
			<h1>Hello, Kitty Ken</h1>
            <textarea name="post_text" rows="10"><?=$post->getText()?></textarea>
     
		</column>
	</row>
	
	<!-- NEW POST CONTROLS -->
	<row centered>
        <column cols="7" >
			<row centered>
				<column cols="4">
					<a href="/" class="btn width-12" outline>Back</a>
				</column>
				<column cols="4">
					<button formaction = "/<?=$post->getID()?>" class="width-12" outline>Save</button>
				</column>
				<column cols="4">
					<button formaction = "/remove/<?=$post->getID()?>" class="width-12" outline>Delete</button>
				</column>
			</row>
		</column>
	</row>
	</form>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</body>
</html>