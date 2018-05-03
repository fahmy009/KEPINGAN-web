<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 20/12/2017
 * Time: 0:52
 */

session_start();
if (session_destroy()) header("location: index.php");
?>