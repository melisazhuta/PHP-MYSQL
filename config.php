<?php
session_start();
$conn = mysqli_connect('localhost','root','','login_register') or die('connection failed');