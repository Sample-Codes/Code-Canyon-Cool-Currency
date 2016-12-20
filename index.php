<?php
	require_once "CoolCurrencyConverter.php";
	$ccc = new CoolCurrencyConverter();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="ccc-webroot/css/font-awesome-4.3.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="ccc-webroot/css/ccc-styles.css" type="text/css" media="screen">-->
    
    <link rel="stylesheet/less" href="ccc-webroot/css/ccc-styles.less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
	<title>Currency Converter</title>
</head>

<body>
    <?php $ccc->create(array( "color"=>"green")); ?>
    <?php $ccc->create(array("template"=>"horizontal", "color"=>"orange")); ?>
    <?php $ccc->create(array("template"=>"vertical", "color"=>"custom", "border"=> false)); ?>
    <script type="text/javascript" src="ccc-webroot/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="ccc-webroot/js/ccc-1.0.js"></script>
    
</body>
</html>