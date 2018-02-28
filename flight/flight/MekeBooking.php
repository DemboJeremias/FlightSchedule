<!doctype html>
<?php require_once "Booking.php" ?>
<?php require_once "module.php" ?>

<html>
<head>
    <title>Booking</title>
</head>
<body>
<?php
$Booking = new Booking();
$Booking->id = "1";
$Booking->booking_from = "Stanstead";
$Booking->booking_to = "Manchester";

$Booking = new Module();
$flower


r->id = "CI1000";

$flowerarr->name = "Flower Arranging";
$flowerarr->venue = "Third dustbin to the left";
$flowerarr->addStudents($Paul);

?>
<p>The first student on
    <b><?=$flowerarr->name ?></b>
    is
    <b>
        <?=$flowerarr->students[0]->givenName ?>
        <?=$flowerarr->students[0]->familyName ?>


    </b>
</p>
</body>
</html>