# DHTMLCONSOLE 

![Screenshot](https://raw.githubusercontent.com/dhtml/dhtml.github.io/master/dhtmlconsole/screen1.png)

## What am I looking at?

You are looking at a Google chrome plugin that allows you to send a message from your web server (directly by running a server script or making an ajax call) 
to your browser by using an HTTP Header.

## Features
 * Provides real-time messaging from your server to your browser without a server refresh.
 * It allows you to debug ajax applications by dumping messages into your browser while debugging.
 * It allows you to save the console messages to an HTML as backup


## Installation and Usage

Download the plugin from google [chrome extensions](https://chrome.google.com/webstore/detail/dhtmlconsole/jojehgiefnbpeljgiofpdmmdeklckbdd). Once you have installed the plugin (and it is enabled).

You can open your devtools console and click on "dhtmlconsole".

## Sending Messages
This depends on your server language.

Here is a PHP code snippet for sending a Hello World message to the console.

```php
<?php
header('X-DHTML-CONSOLE-MSG: Hello World');
?>
```
There is only one rule for the header: it must start with X-DHTML-CONSOLE

As of version 0.3, you can now do javaScript alerts
```php
<?php
header('X-DHTML-CONSOLE-MSG: alert:Hello World');
?>
```


As of version 0.3, you can clear the console from server by:
```php
<?php
header('X-DHTML-CONSOLE-MSG: -clear-');
?>
```

For sending multiple messages via PHP, here is a function for that:
```php
<?php
function dhtmlconsole($msg='') {
	static $pos=0;
	$pos++;
   header('X-DHTML-CONSOLE-MSG'.$pos.': '.$msg);
}

//implementation
dhtmlconsole("Hello");
dhtmlconsole("World");
?>
```

You will find more [sample codes here](https://github.com/dhtml/dhtmlconsole/archive/master.zip)

### Author

**Anthony Ogundipe** a.k.a dhtml
