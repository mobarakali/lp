<?php
$url = 'http://localhost/training';
echo '<pre>';
print_r(get_headers($url));
echo '</pre>';
$url = 'http://localhost';
echo '<pre>';
print_r(get_headers($url));
echo '</pre>';
var_dump($http_response_header);


?>
