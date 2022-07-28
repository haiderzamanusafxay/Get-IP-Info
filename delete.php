<?
include_once('config.php');

$id=$_GET['delete'];
$selectdata= "SELECT data.countryName AS country,data.longitude AS lon,data.latitude AS lat, data.ip AS ip, data.city AS city,data.id AS id
        FROM data JOIN cities
        ON data.id=$id";
        $result= mysqli_query($conn,$showdata);
$delete="DELETE FROM data WHERE id=data.id";
$query=mysqli_query($conn,$delete);
?>
