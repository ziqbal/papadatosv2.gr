<?php

$sid = filesystemBaseGetFilenameWithoutExt( __FILE__ ) ;

$f='stage.png';
$width=imageBaseGetWidth($f);

?>

<style>

.<?=$sid?>Container{
width: <?=$width?>px;
display: block;
margin-left: auto;
margin-right: auto;
}

</style>

<div class='<?=$sid?>Container'>
<img src='stage.png'/>
</div>