<?php

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"] ?? $_SERVER["SCRIPT_NAME"];
$route = $method . " " . $path;
switch ($route) {
	case "GET /index.php":
		header("HTTP/1.1 200 OK");
		header("Content-Type: application/json");
		echo "{}";
		break;
	case "GET /favicon.ico":
		header("HTTP/1.1 200 OK");
		header("Content-Type: image/vnd.microsoft.icon");
		echo base64_decode("AAABAAEAAQEAAAEAIAAwAAAAFgAAACgAAAABAAAAAgAAAAEAIAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAA==");
		break;
	case "POST /2012-09-25/jobs":
		header("HTTP/1.1 201 Created");
		header("Content-Type: application/json");
		echo file_get_contents(__DIR__ . "/responses/create.json");
		break;
	case "GET /2012-09-25/jobs/3333333333333-abcde3":
		header("HTTP/1.1 200 OK");
		header("Content-Type: application/json");
		echo file_get_contents(__DIR__ . "/responses/read.json");
		break;
	default:
		header("HTTP/1.1 404 Not Found");
		header("Content-Type: application/json");
		echo "{}";
		break;
}
