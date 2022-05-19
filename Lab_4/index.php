<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Client-Server</title>
	<link rel="stylesheet" href="style.css">
	<style>
	</style>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="app.js"></script>
	<script>

	</script>
</head>

<body>
	<form name="frmChat" id="frmChat">
		<div id="chat-box"></div>
		<input type="text" name="chat-user" id="chat-user" placeholder="Name" class="chat-input" required />
		<textarea  name="chat-message"  id="chat-message" placeholder="Message" class="chat-input chat-message" required  id="btnSend" cols="30" rows="10"></textarea>
		<input type="submit" id="btnSend" name="send-chat-message" value="Send">
	</form>
</body>

</html>