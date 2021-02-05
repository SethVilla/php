<?php 

session_start();
// destroy session completely removes cookie
session_destroy();

// removes individual elememts session remains
unset($_SESSION['name']);