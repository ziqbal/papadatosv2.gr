<?php

/* 
This page only simulates a database connection.
The entries should be retrieved from an actual database and
delivered in the same format used in $entries array.
*/

$entries = array(
	
	
	<<<EOF
	

<li data-size="1-2">
<article class="entry">
<div class="entry-featured">
<div class="overlay">
<div class="dark color-overlay"></div>

<div class="content-overlay">
<div class="outer">
<div class="inner">
<a href="//www.youtube.com/embed/B84Yr5IjSSU" class="colorbox overlay" title="Video opens in ColorBox" data-title="Nasos Papadatos at Archiproducts <small>Salone Milano 2013 </small>" data-iframe="true">
<!--<i class="huge play icon "></i>-->
</a>
<h2 class="entry-title">
<a href="//www.youtube.com/embed/B84Yr5IjSSU" class="colorbox overlay" title="Video opens in ColorBox" data-title="Nasos Papadatos at Archiproducts  <small>Salone Milano 2013 </small>" data-iframe="true">
Nasos Papadatos at Archiproducts 
</a>
<small>Salone Milano 2013 </small>
</h2>
</div>
</div>
</div>

<img src="images/vid-interview-play.jpg" alt="Image"/>
</div>
</div>
</article>
</li>


EOF
		
	, 	<<<EOF
		

<li data-size="1-2">
<article class="entry">
<div class="entry-featured">
<div class="overlay">
<div class="dark color-overlay"></div>

<div class="content-overlay">
<div class="outer">
<div class="inner">
<a href="//www.youtube.com/embed/B84Yr5IjSSU" class="colorbox overlay" title="Video opens in ColorBox" data-title="Nasos Papadatos at Archiproducts <small>Salone Milano 2013 </small>" data-iframe="true">
<!--<i class="huge play icon "></i>-->
</a>
<h2 class="entry-title">
<a href="//www.youtube.com/embed/B84Yr5IjSSU" class="colorbox overlay" title="Video opens in ColorBox" data-title="Nasos Papadatos at Archiproducts  <small>Salone Milano 2013 </small>" data-iframe="true">
Nasos Papadatos at Archiproducts 
</a>
<small>Salone Milano 2013 </small>
</h2>
</div>
</div>
</div>

<img src="images/vid-interview-play.jpg" alt="Image"/>
</div>
</div>
</article>
</li>


EOF
		
	, 	<<<EOF
		

<li data-size="1-2">
<article class="entry">
<div class="entry-featured">
<div class="overlay">
<div class="dark color-overlay"></div>

<div class="content-overlay">
<div class="outer">
<div class="inner">
<a href="//www.youtube.com/embed/B84Yr5IjSSU" class="colorbox overlay" title="Video opens in ColorBox" data-title="Nasos Papadatos at Archiproducts <small>Salone Milano 2013 </small>" data-iframe="true">
<!--<i class="huge play icon "></i>-->
</a>
<h2 class="entry-title">
<a href="//www.youtube.com/embed/B84Yr5IjSSU" class="colorbox overlay" title="Video opens in ColorBox" data-title="Nasos Papadatos at Archiproducts  <small>Salone Milano 2013 </small>" data-iframe="true">
Nasos Papadatos at Archiproducts 
</a>
<small>Salone Milano 2013 </small>
</h2>
</div>
</div>
</div>

<img src="images/vid-interview-play.jpg" alt="Image"/>
</div>
</div>
</article>
</li>


	
EOF
	
	);
	
	
	
	
	

$from = $_GET['from'];
$count = $_GET['count'];

if($from >= count($entries)){
	echo "none";
	die("");
}

for($i = $from ; $i < min(count($entries) , (int) $from + (int) $count) ; $i++){
	echo $entries[$i];
}