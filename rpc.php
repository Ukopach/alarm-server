<?php
require_once 'includes/jsonrpcphp/includes/jsonRPCServer.php';
require 'services/AlarmService.php';

$alarmService = new AlarmService ();
jsonRPCServer::handle($alarmService) 
    or 

	print 'no request';
	print $_SERVER['REQUEST_METHOD'];
	print $_SERVER['CONTENT_TYPE'];
?>