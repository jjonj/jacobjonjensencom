<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="ISO-8859-1"/>
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href="CSS/default.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Jacob Jon Jensen</a></h1>
			<p>Computer science student</a></p>
		</div>
		<div id="menu">
			<ul>
				<li><a href="/" title="">Home</a></li>
				<li><a href="#" title="">Software</a></li>
				<li><a href="/wishes" title="">Julegave Ønsker</a></li>
				<!--<li><a href="#" title="">File index</a></li>-->
				<li><a href="#" title="">About Jacob J. J.</a></li>
			</ul>
		</div>
	</div>
	<?php
	
	$q = Array();
	$q[] = array( 'quote' => 'Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take away.', 'author' => 'Antoine de Saint-Exupéry');
	$q[] = array( 'quote' => 'Do not seek to follow in the footsteps of the men of old; seek what they sought.', 'author' => 'Basho' );
	$q[] = array( 'quote' => 'I am patient with stupidity but not with those who are proud of it.', 'author' => 'Edith Sitwell' );
	$q[] = array( 'quote' => 'Never be afraid to laugh at yourself, after all, you could be missing out on the joke of the century.', 'author' => 'Dame Edna Everage' );
	$q[] = array( 'quote' => 'Believe those who are seeking the truth. Doubt those who find it.', 'author' => 'André Gide' );
	$q[] = array( 'quote' => 'The avalanche has already started, it is too late for the pebbles to vote.', 'author' => 'Kosh' );
	$q[] = array( 'quote' => 'It’s not that I’m so smart, it’s just that I stay with problems longer.', 'author' => 'Albert Einstein' );
	$q[] = array( 'quote' => 'Education is what remains after one has forgotten what one has learned in school.', 'author' => 'Albert Einstein' );
	$q[] = array( 'quote' => 'Logic will get you from A to B. Imagination will take you everywhere.', 'author' => 'Albert Einstein' );
	$q[] = array( 'quote' => 'Anyone who has never made a mistake has never tried anything new.', 'author' => 'Albert Einstein' );
	$q[] = array( 'quote' => 'Everything should be made as simple as possible, but not simpler.', 'author' => 'Albert Einstein' );
	//$q[] = array( 'quote' => '', 'author' => 'Albert Einstein' );
	
	$daily_quote = $q[array_rand($q)];

	?>
	<div id="page">
		<div id="content">
			<h2>"<?php echo $daily_quote['quote']; ?>"</h2>
			<h3><strong>- <?php echo $daily_quote['author'];?></strong></h3>
			</br>
			<p><img src="images/img02.jpg" width="750" height="250" alt="" /></p>
			<p>Welcome to the site of <strong>Jacob Jon Jensen</strong>, an independant computer science student at Aalborg University.</p>
			<p></p>
		</div>
		<div id="sidebar">
			<div id="tbox1">
				<h2>Mauris vulputate dolor</h2>
				<ul class="style2">
					<li class="first">
						<h3><a href="#">Maecenas luctus lectus</a></h3>
						<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
					</li>
					<li>
						<h3><a href="#">Integer gravida nibh</a></h3>
						<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
					</li>
					<li>
						<h3><a href="#">Fusce ultrices fringilla</a></h3>
						<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
					</li>
					<li>
						<h3><a href="#">Nulla luctus eleifend</a></h3>
						<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</a></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="three-column">
		<div id="tbox1">
			<h2>Praesent mattis</h2>
			<p>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit.</p>
			<p><a href="#" class="button-style">Read More</a></p>
		</div>
		<div id="tbox2">
			<h2>Praesent condimentum</h2>
			<ul class="style1">
				<li class="first"><a href="#">Pellentesque consectetuer gravida blandit.</a></li>
				<li><a href="#">Lorem consectetuer adipiscing elit.</a></li>
				<li><a href="#">Maecenas vitae vitae feugiat eleifend.</a></li>
				<li><a href="#">Pellentesque consectetuer gravida blandit.</a></li>
			</ul>
		</div>
		<div id="tbox3">
			<h2>Social</h2>
			<ul class="style1">
				<li class="first"><a href="https://twitter.com/Crovea">Twitter</a></li>
				<li><a href="http://www.facebook.com/jacob.jensen.9041">Facebook</a></li>
				<li><a href="http://www.youtube.com/user/jjonjex">Youtube</a></li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<p>Copyright (c) 2012 JacobJonJensen.com. All rights reserved.</p>
	</div>
</div>
</body>
</html>
