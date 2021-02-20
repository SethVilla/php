<?php 
/*App Root
* __FILE__ gives path file app/config/config.php
* dirname() return just directory name /app/config
* https://www.php.net/manual/en/function.dirname.php
* nested dirname(dirname()); gives back /app
*
* define()
* https://www.php.net/manual/en/function.define.php
*
*/
define('APPROOT', dirname(dirname(__FILE__)));

//URL root;
