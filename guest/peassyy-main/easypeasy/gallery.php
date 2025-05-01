<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <title>Gallery</title>
</head>
<body>
    <style>
          body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #333;
      padding: 0 20px;
      height: 60px;
      color: white;
    }

    .logo {
      display: flex;
      align-items: center;
      color: #fff;
      text-decoration: none;
      font-size: 18px;
    }

    .logo img {
      height: 30px;
      margin-right: 10px;
    }

    .center-section {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    .center-section a {
      color: #f2f2f2;
      text-decoration: none;
      transition: color 0.3s;
    }

    .center-section a:hover {
      color: #00bfff;
    }

    .auth-links a {
      color: #f2f2f2;
      text-decoration: none;
      margin-left: 20px;
      transition: color 0.3s;
    }

    .auth-links a:hover {
      color: #00bfff;
    }
    </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <a class="navbar-brand d-flex align-items-center" href="#">
    <img src="logo.png" alt="Logo" width="30" height="30" class="me-2">
    <span>pEasy</span>
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">
    <!-- Center Links -->
    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
      <li class="nav-item"><a class="nav-link" href="gallery.php">PC GALLERY</a></li>
      <li class="nav-item"><a class="nav-link" href="build.php">BUILD A PC</a></li>
      <li class="nav-item"><a class="nav-link" href="shop.php">SHOP</a></li>
      <li class="nav-item"><a class="nav-link" href="product.php">PRODUCTS</a></li>
    </ul>

    <!-- Right Auth Links -->
    <div class="d-flex">
      <a class="btn btn-outline-light me-2" href="#signin">Sign In</a>
      <a class="btn btn-primary" href="#signup">Sign Up</a>
    </div>
  </div>
</nav>
    <a href="index.php"></a>
</body>
</html>