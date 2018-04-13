<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link rel="stylesheet" href="Hng.css">
</head>
<body>

<style>
html{
    background-color:  #219653;
    background-size: cover;
    background-repeat: no-repeat;
}
h2{
    color: white;
    text-align: center;
    font-size: 500%;
    margin-top: 100px
}
</style>
        <h2>HNG INTERNSHIP 4</h2>
		
		<?php

echo "<h2> Today is : ".date("l")." ".date("Y-m-d").'<br><br>' ;

date_default_timezone_set("Africa/Lagos");
 
echo " and the time is  ".date(" h : i : s ");
echo "</h2>";

?>

    </body>
    </html>
    