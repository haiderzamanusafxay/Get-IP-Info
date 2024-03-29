<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getting Ip address info</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    .newsletter {
      position: relative;
      padding-top: 30px;
      padding-left: 220px;
      flex-grow: 1;
    }

    .newsletter svg {
      position: absolute;
      z-index: 0;
      top: -90px;
      left: 60px;
      fill: #fcdbe8;
    }

    .newsletter .newsletter-title {
      margin-bottom: 40px;
      font-family: IMFell DW, Times, Georgia, serif;
      font-weight: 400;
      font-style: italic;
      color: #1107ff;
      font-size: 4.0625rem;
      letter-spacing: -.02em;
      line-height: .9230769231;
      position: relative;
      z-index: 999;
    }

    .newsletter .newsletter-text {
      color: rgba(17, 7, 255, .8);
      padding-right: 140px;
      position: relative;
      z-index: 999;
      max-width: 450px;
    }

    .newsletter .newsletter-form {
      position: relative;
      max-width: 355px;
      margin-top: 23px;
      z-index: 999;
    }

    .newsletter .newsletter-form input {
      height: 55px;
      width: 100%;
      padding: 18px 135px 17px 30px;
      font-family: IM Fell English, Times, Georgia, serif;
      font-weight: 400;
      font-style: italic;
      border: 0 none;
      border-radius: 20px;
      outline: none;
      background-color: #fff;
      color: #1107ff;
      font-size: 1.125rem;
      line-height: 1;
    }

    .newsletter .newsletter-form button {
      font-family: Sofia Pro, Helvetica, Arial, sans-serif;
      font-weight: 700;
      font-style: normal;
      width: 116px;
      height: 36px;
      transition: background-color .3s cubic-bezier(.165, .84, .44, 1);
      border-radius: 15px;
      background-color: #ff66a0;
      color: #fff;
      font-size: .875rem;
      line-height: 1;
      position: absolute;
      right: 9px;
      bottom: 9px;
      display: inline-block;
      margin: 0;
      padding: 0;
      border: 0px;
      outline: none;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <script>
    $(document).ready(function () {

      $.ajax({
        type: "GET",
        url: "bodyContent.php",
        success: function (response) {
          $('body').html(response);
        }
      });
      
      $(".button").click(function () {
        var ip = $('#email').val();
        $.ajax({
          url: 'searchforIP.php',
          type: "POST",
          data: { ip: ip },
          success: (response) => {
            $('body').html(response);
          }
        })
      })
    });
  </script>
</body>

</html>