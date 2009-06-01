<!DOCTYPE html>
<html> 
  <head> 
  <title>--| Boxcrate airlines |--</title>
<?php if ($toggles['css']) : ?>
  <link rel="stylesheet" media="screen" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" media="screen" type="text/css" href="assets/css/jquery.autocomplete.css">
  <?php if ($toggles['css3']) : ?>
  <link rel="stylesheet" media="screen" type="text/css" href="assets/css/css3.css">
  <?php endif ?>
<?php endif ?>
</head> 
<body>
<div id="wrapper">
    
<ul id="test-menu">
    <li><a href="?toggle=javascript">Toggle JavaScript</a></li>
    <li><a href="?toggle=css">Toggle all CSS</a></li>
    <li><a href="?toggle=css3">Toggle CSS 3</a></li>
    <li><a href="?toggle=images">Toggle Images</a></li>
</ul>

<div id="header">
  <h1>Boxcrate Airlines</h1> 
</div>
