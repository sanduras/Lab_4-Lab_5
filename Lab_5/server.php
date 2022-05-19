<?php

//Reduce errors
error_reporting(~E_WARNING);

//Create a UDP socket
if(!($sock = socket_create(AF_INET, SOCK_DGRAM, 0)))
{
	$errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);
    
    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

echo "Socket created \n";

$messages = [];

// Bind the source address
if( !socket_bind($sock, "0.0.0.0" , 9999) )
{
	$errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);
    
    die("Could not bind socket : [$errorcode] $errormsg \n");
}

echo "Socket bind OK \n";

//Do some communication, this loop can handle multiple clients
while(1)
{
	echo "Waiting for data ... \n";
	
	//Receive some data
	$r = socket_read($sock, $buf, 4096, 0, $remote_ip, $remote_port);

   
    $data = json_decode($buf,true);
    print_r('jjjjjjj'.$buf);

	// echo "$remote_ip : $remote_port -- " . $data['message'] . ' order:'. $data['order'].'\n';

    // $var = "$remote_ip : $remote_port -- " . $data['message'] . ' order:'. $data['order'];
	
	//Send back the data to the client
	socket_sendto($sock, "OK " , 1024 , 0 , $remote_ip , $remote_port);
}

socket_close($sock);