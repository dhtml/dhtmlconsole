<?php 
 /**
 * This function will send message via http header to the dhtmlconsole
 *
 * Make sure you open the dhtmlconsole under developer tools to run this
 *
 */
function dhtmlconsole($msg='') {
	static $pos=0;
	$pos++;
   header('X-DHTML-CONSOLE-MSG'.$pos.': '.$msg);
}

/**
* this routine will send the results directly to the dhtmlconsole
*/
for($i=1;$i<=3;$i++) {
dhtmlconsole("Sample ".$i);	
}
?>

This is a sample PHP script that generates console messages:
<ul>
<li>Sample 1
<li>Sample 2
<li>Sample 3
</ul>
and sends the sample messages to the dhtmlconsole via headers.<br/>
This is particularly useful when handling ajax requests because you might wish to test some variables without necessarily sending them back via ajax request.
