
<?php
require_once('config.php');
if($_GET['search']!=""){
        $filtervalues = $_GET['search'];           
        $query = "SELECT data.countryName AS country,data.longitude AS lon,data.latitude AS lat, data.ip AS ip, data.city AS city, data.id AS id
        FROM data JOIN cities
        ON data.id=cities.cityid 
        WHERE data.id LIKE '%$filtervalues%'
        OR data.ip LIKE '%$filtervalues%'
        OR data.city LIKE '%$filtervalues%'
        OR data.countryName LIKE '%$filtervalues%'
        OR data.longitude LIKE '%$filtervalues%'
        OR data.latitude LIKE '%$filtervalues%'";
        $result= mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
          while($rows=mysqli_fetch_assoc($result)){
  
            ?>
<tr>
<td colspan="2"><?php echo $rows['id'] ?></td>
      <td><?php echo $rows['ip'] ?></td>
      <td><?php echo $rows['country'] ?></td>
      <td><?php echo $rows['city'] ?></td>
      <td><?php echo $rows['lon'] ?></td>
      <td><?php echo $rows['lat'] ?></td>
</tr>
         
    <?php }}}else{ 
      $query2 = "SELECT data.countryName AS country,data.longitude AS lon,data.latitude AS lat, data.ip AS ip, data.city AS city, data.id AS id
      FROM data JOIN cities
      ON data.id=cities.cityid ";
      $result2= mysqli_query($conn,$query2);
      if(mysqli_num_rows($result2)>0){
          ?>
    <?php 
      foreach($result2 as $items2){
    ?>
    <tr>
      <td colspan="2"><?php echo $items2['id'] ?></td>
      <td><?php echo $items2['ip'] ?></td>
      <td><?php echo $items2['country'] ?></td>
      <td><?php echo $items2['city'] ?></td>
      <td><?php echo $items2['lon'] ?></td>
      <td><?php echo $items2['lat'] ?></td>
    </tr>
          <?php }} ?>
<?php } ?>
