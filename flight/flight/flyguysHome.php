<!DOCTYPE HTML>
<?php require_once'header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="fly guys">
    <meta name="author" content="fligts">
    <title>FlyGuys</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script  src='flyGuys.js'></script>



</head>

   
    
    

  
        
    <div class="banner">
    <img class="banner-image" src="fly-mo.jpg">
    
    </div>

    <div class="booking">
        <form action="" method="get">
<h2 id="title">Search for a flight</h2>
        <label class="DepLabel">Departure</label>
    <select id="flight-from"name="Flight from">
        <option value="Stansted">Stansted</option>
        </select>




        <label class="DestLabel">Destination</label>
        <select id="flight-to" name="flight to">
        <option value="Manchester">Manchester</option>
        <option value="Glasgow">Glasgow</option>
        <option value="Dublin">Dublin</option>
            <option value="Paris">Paris</option>
            <option value="Madrid">Madrid</option>
            <option value="Brussels">Brussels</option>
        </select>


        <label class="DepDateLab">Departing Date</label> <input type="text" id="departing">
        <button id="addBas" type="submit">Search</button>
    </div>
</form>



<?php require_once'footer.php'; ?>

