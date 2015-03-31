
<!--{iflive-->

<?php

$sid=filesystemBaseGetFilenameWithoutExt(__FILE__);

$cssContainerWidth=configGet("cssPageWidth")/(1*configGet("cssG"));

?>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '301803440021663',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



<div class='roundedbottoms' id="<?=$sid?>">
	<div>
	<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
	<div>
	<div class="fb-like" data-href="<?=httpBasePrecacherURL()?>" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
	</div>
	<div class='<?=$sid?>MarginTop'>
	<div class="g-plusone" data-annotation="inline" data-width="300"></div>
	</div>
</div>



<style>
#<?=$sid?> {

  <?= configGet ( "cssDebug" ) ?>

  opacity:0.9;
 margin : 0px auto; 
  width : <?= configGet ( "cssContainerWidth" ) ?>px ;
  text-align : justify ;
  line-height : 1.5em ;


  padding-left:<?=configGet("cssGapWidth")?>px;
  padding-right:<?=configGet("cssGapWidth")?>px;
  padding-top:5px;


}
#<?=$sid?> div{

  <?= configGet ( "cssDebug" ) ?>

  margin-bottom:5px;

}
</style>

<!--}iflive-->
