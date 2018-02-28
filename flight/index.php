
<?php require_once ('./include/header.php');?>



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


        <label class="DepDateLab">Departing Date</label> <input type="date" id="departing">
        <button id="addBas" type="submit">Search</button>
    </form>
</div>

<?php require_once ('./include/_footer.php');?>

