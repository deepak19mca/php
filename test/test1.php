<?php

$username='admin';
$password='12345';
if($username='admin' && $password='12345')
{
	echo "welcome";
}
else
{
	echo "username and password is not valid";
}

if($username='admin' || $password='1234')
{
	echo "welcome";
}
else
{
	echo "username and password is not valid";
}
?>