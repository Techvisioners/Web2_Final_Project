<?php
session_start();
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OTP | CH-MGMT</title>
  <link rel="icon" type="image/png" href="./assets/logos/main_icon.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <main class="bg-sign-in d-flex justify-content-center align-items-center">
    <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">

      <div>
        <h1 class="sign-in text-uppercase">OTP</h1>
        <p>Church Member Management<br><b>ADMIN PANEL</b></p>
      </div>

      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "please enter your email or password") {
          echo '<div sclass="alert alert-danger" role="alert">
            please enter your email or password
          </div>';

        } elseif ($_GET['error'] == "invalid otp") {
          echo '<div class="alert alert-danger" role="alert">
            invalid otp
          </div>';
        }
      }
      ?>

      <form method="POST" action="otp_execute.php">

        <div class="mb-3 mt-3 d-flex justify-content-center align-items-center flex-column">
          <label for="otp" class="text-center mb-2"><b>OTP sent to</b> <?php echo $email ?></label>
          <input type="text" class="form-control" id="otp" placeholder="Enter OTP" name="otp" maxlength="6" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 6);" required autofocus>
        </div>

        <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">VERIFY</button>
        <p class="mt-4"></a></p>

      </form>
    </div>

  </main>

  <div class="bg"></div>

  <script src="/js/bootstrap.bundle.js"></script>
  <script src="./js/validation.js"></script>
</body>

</html>