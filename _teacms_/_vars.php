<?php


configSet("cssG",1.61803398875);


//configSet("cssDebug","border:1px solid #".imageColourDBRND().";");

configSet("cssPageWidth",800);
configSet("cssGapWidth",10);
configSet("cssGapHeight",10);

configSet("cssPageMarginTop",120);
configSet("cssPageMarginBottom",50);

configSet("cssBackgroundScrollFactor",200);

configSet("cssBackgroundColour","rgba(255,255,255,0.9)");
//configSet("cssBackgroundColour","#fff");




// NAV COLOURS

configSet("cssNavBackgroundColour",configGet("cssBackgroundColour"));
//configSet("cssNavBackgroundColour","");
configSet("cssNavForegroundColour","#0094DE");

configSet("cssNavActiveBackgroundColour","#275683");
configSet("cssNavActiveForegroundColour","#d1e8ff");

configSet("cssNavHoverBackgroundColour","#000");
configSet("cssNavHoverForegroundColour","#fff");



//configSet("cssContainerWidth",round(configGet("cssPageWidth")/(1*configGet("cssG"))));
configSet("cssContainerWidth",configGet("cssPageWidth"));

?>

