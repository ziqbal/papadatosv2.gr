<?php
$sid=filesystemBaseGetFilenameWithoutExt(__FILE__);
$cssContainerWidth=20+configGet("cssPageWidth")/(1*configGet("cssG"));
?>
<style>
#<?=$sid?>{
	margin: -0px auto;
  width:<?=$cssContainerWidth?>px;
  text-align: justify;
  background-color: white;
  border-top: 1px solid black;


}
</style>

<div id='<?=$sid?>'>
</div>


