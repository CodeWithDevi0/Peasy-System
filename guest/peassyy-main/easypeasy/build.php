<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="build.css">
  <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
  <title>Build a PC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <a class="navbar-brand d-flex align-items-center" href="home.php">
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
  
  <h2>BUILD YOUR OWN PC</h2>

  <div class="pc-builder-container">
    <form class="pc-builder-form">
      <div class="pc-builder-row">
        <label for="cpu">CPU:</label>
        <select id="cpu" name="cpu">
          <option value="">Select a CPU</option>
          <option value="intel-i5">Intel Core i5</option>
          <option value="intel-i7">Intel Core i7</option>
          <option value="ryzen5">AMD Ryzen 5</option>
          <option value="ryzen7">AMD Ryzen 7</option>
        </select>
      </div>

      <div class="pc-builder-row">
        <label for="gpu">Graphics Card:</label>
        <select id="gpu" name="gpu">
          <option value="">Select a GPU</option>
          <option value="gtx1660">NVIDIA GTX 1660</option>
          <option value="rtx3060">NVIDIA RTX 3060</option>
          <option value="rx6600">AMD RX 6600</option>
          <option value="rx6700">AMD RX 6700 XT</option>
        </select>
      </div>

      <div class="pc-builder-row">
        <label for="ram">RAM:</label>
        <select id="ram" name="ram">
          <option value="">Select RAM</option>
          <option value="8gb">8GB DDR4</option>
          <option value="16gb">16GB DDR4</option>
          <option value="32gb">32GB DDR4</option>
        </select>
      </div>

      <div class="pc-builder-row">
        <label for="storage">Storage:</label>
        <select id="storage" name="storage">
          <option value="">Select Storage</option>
          <option value="256ssd">256GB SSD</option>
          <option value="512ssd">512GB SSD</option>
          <option value="1tbhdd">1TB HDD</option>
          <option value="1tbssd">1TB SSD</option>
        </select>
      </div>

      <div class="pc-builder-row">
        <label for="psu">Power Supply:</label>
        <select id="psu" name="psu">
          <option value="">Select PSU</option>
          <option value="500w">500W</option>
          <option value="650w">650W</option>
          <option value="750w">750W</option>
        </select>
      </div>

      <div class="pc-builder-row">
        <label for="case">PC Case:</label>
        <select id="case" name="case">
          <option value="">Select Case</option>
          <option value="midtower">Mid Tower RGB</option>
          <option value="minitower">Mini Tower</option>
          <option value="fulltower">Full Tower</option>
        </select>
      </div>

      <button type="submit" class="product-button">Preview Build</button>
    </form>
  </div>
</body
