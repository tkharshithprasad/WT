<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Digital Clock</title>
    <script type="text/javascript">
    function startTime(){
        var d=new Date();
        var h =d.getHours();
        var m=d.getMinutes();
        var s=d.getSeconds();

        document.getElementById("txt").innerHTML=h+":"+m+":"+s;
        setTimeout('startTime()', 1000);
    }
    </script>
    <style type="text/css">
    h1{
        font-size:50px;
    }
    </style>
</head>
<body bgcolor="#000080" text="white" onload="startTime()">
<br>
<h1 align="center">The time from the local system is:
<span id="txt"></span>
    <br></h1>


<?php $today=date("H:m:s"); ?>
<br>
<h1 align="center"><?php echo "The time from the server is:",date("h:i:sa");?>
    <br></h1>

    </body>
</html>
