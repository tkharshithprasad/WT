<!--<p style="border:solid 1pt blue">6. Write a PHP program to keep track of the 
visitors visiting the web page and to display this count of visitors, with proper headings.</p>-->
<?php
$file = 'count.txt';
$count = strval(file_get_contents($file));
file_put_contents($file, $count + 1);
echo("Hello, You are visitor number:".$count);
?>
