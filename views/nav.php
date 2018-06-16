<?php

$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>
<ul>
  <li><a href="http://localhost:8000/costum_MVC/public">Home</a></li>
  <li><a href="http://localhost:8000/costum_MVC/public/about">About us</a></li>
  <li><a href="http://localhost:8000/costum_MVC/public/about/israel">Company in israel</a></li>
</ul>