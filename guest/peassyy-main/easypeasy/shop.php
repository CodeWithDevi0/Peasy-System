<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <title>Shop</title>
</head>
<body>
    <style>
   
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
<!-- Shop Layout -->
<div style="display: flex; min-height: 100vh;">
  <!-- Sidebar -->
  <aside style="width: 250px; background-color: #2e2e2e; color: white; padding: 20px;">
    <h2 style="font-size: 18px; margin-top: 0;">Categories</h2>
    <p><a href="#" style="color: #00bfff; text-decoration: none;">All Categories</a></p>
    <p style="color: #aaa;">No categories available</p>
    <hr style="border-color: #555;">

    <h2 style="font-size: 18px;">Brands</h2>
    <p><a href="#" style="color: #00bfff; text-decoration: none;">All Brands</a></p>
    <p style="color: #aaa;">No brands available</p>
  </aside>

  <!-- Main Content -->
  <main style="flex: 1; background-color: #fff; padding: 40px;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
      <h1 style="margin: 0;">Shop PC Components</h1>
      <select style="padding: 6px 10px; font-size: 16px;">
        <option>Newest</option>
        <option>Name: A to Z</option>
        <option>Name: Z to A</option>
      </select>
    </div>
    <p>Browse our wide selection of high-quality PC components</p>
    <hr>

    <div style="margin-top: 20px;">
      <p><strong>Showing 0 products</strong></p>
      <p>No products available. Please check back later.</p>
    </div>
  </main>
</div>

    <a href="index.php"></a>
</body>
</html>
<div class="product-card">
      <img src="https://via.placeholder.com/250x180" alt="Product Image">
      <div class="product-info">
        <h3 class="product-title">Power Supply</h3>
        <p class="product-description">RGB Mid-tower with tempered glass side panel.</p>
        <p class="product-price">$89.99</p>
        <a href="#" class="product-button">Add to Cart</a>
      </div>