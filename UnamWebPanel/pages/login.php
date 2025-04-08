<!DOCTYPE html>
<html>
<head>
  <title>Redirect Page</title>
</head>
<body>

  <h1>Click the button to continue</h1>

  <form method="post">
    <button type="submit" name="redirect">Go to Destination</button>
  </form>

  <?php
    if (isset($_POST['redirect'])) {
        // Redirect to another page
        header("Location: login");
        exit;
    }
  ?>

</body>
</html>
