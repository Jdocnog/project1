<!DOCTYPE html>
<html lang="en">
<head>    
	<title> meaningful page title(reflecting page content)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="brief description of the page">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
</head> 
 <body>
     <header><h1>Head me!</h1></header>

        <main>
            <h2>Please enter your shipping information below</h2>
            <form action="checkout.php">
                <ul>
                    <li><label>Address</label><input type="text" name="address"></li>
                    <li><label>City</label><input type="text" name="city"></li>
                    <li><label>State</label><input type="text" name="state"></li>
                    <li><label>Postal/ZIP Code</label><input type="text" name="zip"></li>
                </ul>
                <input type="submit" name="submit_shipping">
            </form>
        </main>  
  
	<footer>Your name –CS3800 assignment #-Fall2017</footer>  

  </body>
</html>




<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
