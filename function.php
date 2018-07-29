<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 8/17/2017
 * Time: 12:57 AM
 */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>