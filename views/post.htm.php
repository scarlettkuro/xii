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
	
	<!-- POST -->
	<row centered>
		<column cols="7" class="mainpost">
			<h1><?=$post->getTitle()?></h1>
			<p><?=$post->getText()?></p>
		</column>
	</row>
	
	<!-- POST CONTROLS -->
	<row centered>
        <column cols="7" >
			<row centered>
				<column cols="4">
					<a href="/" class="btn width-12" outline>Back</a>
				</column>
				<column cols="4">
					<a href="/edit/<?=$post->getID()?>" class="btn width-12" outline>Edit</a>
				</column>
				<column cols="4">
					<a href="" class="btn width-12" outline>Comments(13)</a>
				</column>
			</row>
		</column>
	</row>
	
</body>
</html>