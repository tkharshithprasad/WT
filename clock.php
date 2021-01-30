<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Digital Clock</title>
<style type="text/css">
    h1{
        font-size:50px;
    }
    </style>
</head>
<body>
<h1 align ="center"><?php
date_default_timezone_set("Asia/Kolkata");
echo date('h:i:s A');
?>
</body>
</html>