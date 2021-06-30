<html>
<head>
    <title>VIEW YOUR COOKIE</title>
    <style>
h1
{
color:blue;


}
h3
{
    color:green;
}

    </style>
</head>
<body>
    <h1>*************INDIAN FLIGHTS******************</h1>
    <h3>Thank you for choosing INDIAN Flights</h3>
    <h3>cookie values are</h3>
    <h3><?php echo "YOUR USERNAME:".$_COOKIE["user_name"]; ?></h3>
    <h3><?php echo "YOUR SEAT IS:".$_COOKIE["seat"]; ?></h3>
    <h3><?php echo "CHOOSEN MEAL IS:".$_COOKIE["meal"]; ?></h3>
</body>
<?php
if(isset($_COOKIE['lastVisit']))
{
$visit = $_COOKIE['lastVisit'];
echo "Your last visit on : ".$visit;
}
else
echo "Welcome TO INDIAN FLIGHTS THIS IS YOUR FIRST VISIT";
?>
</html>