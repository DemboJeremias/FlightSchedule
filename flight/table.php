<!DOCTYPE HTML>

<?php session_start();?>
<?php require_once('./database/DB_connection.php'); ?>
<?php require_once ('./database/getflight.php'); ?>




<head>
</head>
<body>

<table>
    <thead>
    <tr>
        <th>Flight ID</th>
        <th>Schedule ID</th>
        <th>Destination ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $item): ?>
    <tr>
        <td><?= $result->flight_id;?></td>
        <td> Flight Id</td>
        <td> Flight Id</td>
    </tr>
<?php endforeach;?>
    </tbody>
</table>

</body>
</html>