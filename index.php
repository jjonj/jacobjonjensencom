<?php
    include "pagetop.php";
?>
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
<?php
include "pagebottom.php";
?>