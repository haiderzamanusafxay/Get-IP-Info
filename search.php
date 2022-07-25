
<?php
if($_GET['input']!=""){
require_once('config.php');
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
      }
    ?>
 <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody id="showSingleRec">
          <?php 
            if(mysqli_num_rows($result) > 0){
            foreach($result as $items){
          ?>
          <tr>
            <td colspan="2"><?php echo $items['id'] ?></td>
            <td><?php echo $items['ip'] ?></td>
            <td><?php echo $items['country'] ?></td>
            <td><?php echo $items['city'] ?></td>
            <td><?php echo $items['lon'] ?></td>
            <td><?php echo $items['lat'] ?></td>
          </tr>
                <?php }} ?>
          </tbody>
        </table>
            </section>
      </div>