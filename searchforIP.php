<?php
if (isset($_POST['ip'])) {
  $ip = $_POST['ip'];
  $user_info = json_decode(file_get_contents("http://ipwho.is/$ip"), true);

  $country = $user_info['country'];
  $long = $user_info['longitude'];
  $lat = $user_info['latitude'];
  $city = $user_info['city'];
  $borders = $user_info['borders'];
}


// echo "<pre>" . print_r($user_info) . "</pre>";

?>

<div class="container mt-5">
  <h1 style="display: inline-flex;">Your Query Results</h1>
  <button type="button" class="btn btn-success btn-rounded mx-3 my-3">New Query</button>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Ip Address</th>
        <th>Country Name</th>
        <th>City</th>
        <th>Longitude</th>
        <th>Latitude</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!$long) { ?>
        <tr colspan="5" style="align-text: center;">No data found, please double check your query.</tr>
      <?php } else { ?>
        <tr>
          <td>
            <?php echo $ip ?>
          </td>
          <td>
            <?php echo $country ?>
          </td>
          <td>
            <?php echo $city ?>
          </td>
          <td>
            <?php echo $long ?>
          </td>
          <td>
            <?php echo $lat ?>
          </td>

        </tr>
      <?php } ?>
    </tbody>
  </table>

</div>