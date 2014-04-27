<?php 
session_start();
require_once 'config.php';?>
<html>
	<head>
  	<title>Controladoeres</title>
    <script src="ajs/jquery.js"></script>
    <script src="ajs/bootstrap.min.js"></script>
    <script src="ajs/angular.min.js"></script>
    <script src="ajs/angular-route.min.js"></script>
    <script src="ajs/angular-locale_es-es.js"></script>
    <script src="ajs/urlredirect.js"></script>
	</head>
  <body ng-app="Adminsgde">
    <div>
      <div ng-view></div>
    </div>
  </body>
</html>