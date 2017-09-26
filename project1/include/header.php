<!DOCTYPE html>
<html lang="en">
<head>    
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $description; ?>">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head> 
<body>
    <header>
        <ul id="nav">
            <li><a href="./index.php">Home</a></li> |
            <li><a href="./appmenu.php">Appetizers</a></li> |
            <li><a href="./entmenu.php">Entrees</a></li> |
            <li><a href="./dessmenu.php">Desserts</a></li> |
            <li><a href="./cart.php">Cart</a></li>
        </ul>
        <h1><?php echo $pageTitle; ?></h1>
    
    </header>

