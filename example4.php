<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>DHTMLConsole Tester</title>
</head>
<body class="docs ">

<p>Type a text here and press enter when you are done</p>
<input type="text" style="width:400px;" id="message" value="Test">
<p>Your message will be sent via ajax to post.php which will in turn forward the message to the dhtmlconsole in devtools.</p>

<script src="jquery.min.js"></script>
<script>
$('#message').on('keyup',function(event) {
	if(event.keyCode!=13) {return;}
	message=$(this).val();
	if(message=='') {return;}
	
 $.post( "post.php", {message: message } , function(data) {
	$('#message').val('');
  }).fail(function() {
    alert( "error" );
  });

	
}).trigger('keyup');
</script>
</body>
</html>

