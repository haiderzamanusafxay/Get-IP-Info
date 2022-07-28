<?php
require_once('config.php');
?>
<!doctype html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
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
        margin: 0px 0px 0px 870px;
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
/* CSS */
#addicon{

  background: #5E5DF0;
  border-radius: 999px;
  box-shadow: #5E5DF0 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
  height:fit-content;
  margin-left:1000px;
  margin-top:10px;
}
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
            <form>
            <input type="search" name="search" id="searchbar" placeholder="Search data">
            <input type="button" value="Search" id="searchbtn">
            </form>

  <!-- search bar ends here  -->
  <button  id="addicon">ADD COUNTRY</button>
<?php
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
        <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <table cellpadding="0" cellspacing="0" border="0">
    <tbody id="showSingleRec">
    <?php 
      if(mysqli_num_rows($result) > 0){
      while($rows=mysqli_fetch_assoc($result)){
        ?>
    <tr>
      <td colspan="2"><?php echo $rows['id'] ?></td>
      <td><?php echo $rows['ip'] ?></td>
      <td><?php echo $rows['country'] ?></td>
      <td><?php echo $rows['city'] ?></td>
      <td><?php echo $rows['lon'] ?></td>
      <td><?php echo $rows['lat'] ?></td>
      <td><i class="lni lni-pencil"></i><i class="lni lni-trash-can"></i></td>
    </tr>
          <?php }}?>
    </tbody>
  </table>
      </section>
      </div>


      
<?php
// }
  ?>
<script>
  $(document).ready(function(){
     // adding ajax to the add button 
     $('#addicon').click(function(){
      $.ajax({
        url: 'add.php',
        method: 'post',
        success:function(load){
          $('.form').html(load);
        }
      });
    });
    // adding ajax to the search 
   $('#searchbtn').click(function(){
     var data1 = $("#searchbar").val();
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