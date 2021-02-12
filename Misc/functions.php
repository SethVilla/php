<?php
/*
*
* Namespaces
* https://www.php.net/manual/en/language.namespaces.definition.php
* In the broadest definition namespaces are a way of encapsulating items
*/
//namespace MyProject;
namespace MyProject\Sub\Level;
const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
//The above example creates constant MyProject\Sub\Level\CONNECT_OK, class MyProject\Sub\Level\Connection and function MyProject\Sub\Level\connect.
/*
* set_time_limit — Limits the maximum execution time
* https://www.php.net/manual/en/function.set-time-limit.php
* In the broadest definition namespaces are a way of encapsulating items
*/
$hour = 60 * 60; // 3600 sec
set_time_limit($hour);