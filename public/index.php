<?php
require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beautyness</title>
  <link rel="stylesheet" href="../app/css/normalize.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
  <script src="https://kit.fontawesome.com/2affe77f85.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../app/css/style.css" />
  <link rel="stylesheet" href="../app/css/variables.css" />
  <link rel="stylesheet" href="../app/css/header.css">
  <link rel="stylesheet" href="../app/css/home-page.css">
  <link rel="stylesheet" href="../app/css/footer.css">
  <link rel="stylesheet" href="../app/css/responsive-design.css">
  <script src="/../brigita/app/js/nav-mobile.js" defer></script>
  <script src="/../brigita/app/js/scroll-to-form.js" defer></script>
  <script src="/../brigita/app/js/img-size-change.js" defer></script>
</head>

<body>
  <?php
  include '../app/views/header.php';
  include '../app/views/home-page.php';
  include '../app/views/footer.php';

  ?>

</body>

</html>