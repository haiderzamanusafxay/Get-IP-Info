<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD RECORD</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <style>
        body{margin:0}
.form{width:340px;height:440px;background:#e6e6e6;border-radius:8px;box-shadow:0 0 40px -10px #000;margin:calc(50vh - 220px) auto;padding:20px 30px;max-width:calc(100vw - 40px);box-sizing:border-box;font-family:'Montserrat',sans-serif;position:relative}
h2{margin:10px 0;padding-bottom:10px;width:180px;color:#78788c;border-bottom:3px solid #78788c}
input{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;font-family:'Montserrat',sans-serif;transition:all .3s;border-bottom:2px solid #bebed2}
input:focus{border-bottom:2px solid #78788c}
p:before{content:attr(type);display:block;margin:28px 0 0;font-size:14px;color:#5a5a5a}
button{float:right;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:2px solid #78788c;background:0;color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#78788c;color:#fff}
div{content:'Hi';position:absolute;bottom:-15px;right:-20px;background:#50505a;color:#fff;width:320px;padding:16px 4px 16px 0;border-radius:6px;font-size:13px;box-shadow:10px 10px 40px -14p;
}
    </style>
</head>
<body>
<?php
require_once('config.php');
$result = false;
if(isset($_GET['ip'])){
  $ip=$_GET['ip'];
  $user_info= json_decode(file_get_contents("http://ipwho.is/$ip"),true);

  $country= $user_info['country'];
  $long=$user_info['longitude'];
  $lat=$user_info['latitude'];
  $city=$user_info['city'];
  $ip=$user_info['ip'];
  $borders= $user_info['borders'];


  $sql= "INSERT INTO data (countryName,longitude,latitude,ip,city) VALUES ('$country','$long','$lat','$ip','$city')";
  $result= mysqli_query($conn,$sql);
  $foreignid= "SELECT id FROM `data` WHERE city='$city'";
  $id=mysqli_query($conn,$foreignid);
  $result= mysqli_fetch_assoc($id);
  
  foreach ($result as $key => $value) {
      $sql2= "INSERT INTO cities(cityid,city) VALUES ('$value','$city')";
      mysqli_query($conn,$sql2);
  }
}
if($result){
  header('location: php.php');
}
?>
<!-- <form class="modal" tabindex="-1" role="dialog"  action="add.php" method="GET">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <<input type='name' placeholder="xxx.xxx.xx.x" name='ip' required>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div> -->
  
</form>
    <form class="form" action="" method="GET"  role="dialog">
    <h2>Enter Ip address</h2>
  <input type='name' placeholder="xxx.xxx.xx.x" name='ip' required>
  <input type="submit" value="Submit">
    </form>

</body>
</html>