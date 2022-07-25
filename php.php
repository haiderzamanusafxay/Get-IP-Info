<?php
require_once('config.php');
?>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="icon" type="image/x-icon" href="icon.jpg">
    <style>
        
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
/* styling search bar  */
    #searchbar{
        height:30px;
        width:230px;
        margin: 0px 0px 10px 860px;
        border-radius:13px 0px 0px 13px;
    }
    #searchbar[placeholder]{
        padding-left: 10px;
    }
    #searchbtn{
        border-radius:0px 13px 13px 0px;
        margin-left:0px;
        width:60px;
        height:30px;
    }
/* ends search bar styling  */
    </style>
</head>
<body>
<?php
$showdata= "SELECT data.countryName AS country,data.longitude AS lon,data.latitude AS lat, data.ip AS ip, data.city AS city,data.id AS id
        FROM data JOIN cities
        ON data.id=cities.cityid";
        $result= mysqli_query($conn,$showdata);
    ?>
<h1>Info of ip addresses</h1>

<!-- search bar starts here  -->
<form action="php.php" method="GET">
            <input type="search" name="search" id="searchbar" placeholder="Search data">
            <input type="submit" value="Search" id="searchbtn">
            </form>

  <!-- search bar ends here  -->
    

<?php
// if(isset($_GET['search'])){
?>

<section>
<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
        <th>ID<th>
				<th>Ip Address</th>
				<th>Country Name</th>
				<th>City</th>
				<th>Longitude</th>
				<th>Latitude</th>
        </tr>
      </thead>
    </table>
  </div>
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
<?php
// }
  ?>
<!-- // if(!isset($_GET['search']) || $_GET== ""){?> -->
 
<script>
  $(document).ready(function(){
   $('#searchbar').on("keyup",function(){
     var data1 = $(this).val();
     $.ajax({
       method:'GET',
       url:'search.php',
       data:{search:data1},
       success:function(response)
       {
          $("#showSingleRec").html(response);
       } 
     });
   });
  });
</script>
</body>
</html>