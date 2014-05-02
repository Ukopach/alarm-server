<?php
require_once 'rpc/jsonrpcphp/includes/jsonRPCServer.php';
require 'example.php';

$myExample = new example();
jsonRPCServer::handle($myExample)
    or print 'no requestkdksdjlkj';
?>