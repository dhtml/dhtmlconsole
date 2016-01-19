<?php 
 /**
 * Just send a couple of messages via http headers to the dhtmlconsole
 *
 * Make sure you open the dhtmlconsole under developer tools to run this
 *
 */
header('X-DHTML-CONSOLE-MSG: Hello World');
header('X-DHTML-CONSOLE-MSG-1: Hello World 1');
header('X-DHTML-CONSOLE-MSG-2: Hello World 2');
?>