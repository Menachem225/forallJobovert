<html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: https://www.w3schools.com" target="_blank">');
exit;
?>