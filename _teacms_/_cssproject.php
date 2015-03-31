<?php

$cssdev=false;

?>


<style>

* {
  margin : 0 ;
}

<?php if($cssdev){ ?>
* { outline: 2px dotted red }
* * { outline: 2px dotted green }
* * * { outline: 2px dotted orange }
* * * * { outline: 2px dotted blue }
* * * * * { outline: 1px solid red }
* * * * * * { outline: 1px solid green }
* * * * * * * { outline: 1px solid orange }
* * * * * * * * { outline: 1px solid blue }
<?php } ?>


html , body {
  height : 100% ;
}

html {
  overflow-y : scroll ;   
}

a {
  text-decoration: none ;
 text-transform: capitalize; 
}

body {
}


img {
  vertical-align : middle;
}

a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none;
}



</style>
