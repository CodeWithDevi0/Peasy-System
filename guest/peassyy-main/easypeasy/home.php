<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
  <title>pEasy</title>
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
  <div class="marquee">
    <div class="marquee-text">Check out our latest discounts and offers! New products are added weekly. Don't miss out on amazing deals! Build Your Dream! Shop now!</div>
  </div>
  <!-- SLIDER -->
  <div class="slider">
  <div class="slides">
    <div class="slide">
      <img src="slider1.png" alt="Banner 1">
    </div>
    <div class="slide">
      <img src="slider2.png" alt="Banner 2">
    </div>
    <div class="slide">
      <img src="slider3.png" alt="Banner 3">
    </div>
  </div>

  <div class="dots"></div>
</div>
<div class="product-container" id="product-container"></div>

<script>
  const products = [
    { title: 'Power Supply', description: 'RGB Mid-tower with tempered glass side panel.', price: '$89.99' },
    { title: 'PC Case', description: 'RGB Mid-tower with tempered glass side panel.', price: '$89.99' },
    { title: 'Solid State Drives', description: 'RGB Mid-tower with tempered glass side panel.', price: '$89.99' },
    { title: 'Memory', description: 'RGB Mid-tower with tempered glass side panel.', price: '$89.99' },
  ];

  const container = document.getElementById('product-container');

  products.forEach(product => {
    container.innerHTML += `
      <div class="product-card">
        <img src="https://via.placeholder.com/250x180" alt="Product Image">
        <div class="product-info">
          <h3 class="product-title">${product.title}</h3>
          <p class="product-description">${product.description}</p>
          <p class="product-price">${product.price}</p>
          <a href="#" class="product-button">Add to Cart</a>
        </div>
      </div>
    `;
  });
</script>

<!-- New Arrivals Section -->
 <div class="container">
<h2 style="margin: 20px; font-size: 24px;">NEW ARRIVALS</h2>

<?php
$newArrivals = [
  [
    "title" => "Lenovo V14 G4 ABP",
    "description" => '14&quot; FHD | Ryzen 5 | 8GB DDR4 | 256GB SSD',
    "price" => '₱29,995.00',
    "image" => 'https://via.placeholder.com/250x180'
  ],
  [
    "title" => "HP Pavilion 15",
    "description" => '15.6&quot; FHD | Intel i5 | 16GB RAM | 512GB SSD',
    "price" => '₱35,995.00',
    "image" => 'https://via.placeholder.com/250x180'
  ],
  [
    "title" => "Acer Aspire 7",
    "description" => '15.6&quot; FHD | Ryzen 7 | 16GB RAM | 512GB SSD',
    "price" => '₱39,500.00',
    "image" => 'https://via.placeholder.com/250x180'
  ],
  [
    "title" => "ASUS TUF Gaming",
    "description" => '15.6&quot; FHD | Ryzen 7 | RTX 3050 | 16GB RAM',
    "price" => '₱47,999.00',
    "image" => 'https://via.placeholder.com/250x180'
  ],
];
?>

<div class="new-container">
  <?php foreach ($newArrivals as $product): ?>
    <div class="new-card">
      <img src="<?= $product['image'] ?>" alt="Product Image">
      <div class="new-info">
        <h3 class="new-title"><?= $product['title'] ?></h3>
        <p class="new-description"><?= $product['description'] ?></p>
        <p class="new-price"><?= $product['price'] ?></p>
        <a href="#" class="new-button">Buy Now</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>


<!-- Top Sellers Section -->
<h2 style="margin: 20px; font-size: 24px;">TOP SELLERS</h2>

<?php
$topSellers = [
  [
    "title" => "Coolermaster MWE850 V2",
    "description" => "Fully Modular 80+ Gold Power Supply",
    "price" => "₱7,500.00",
    "image" => "https://via.placeholder.com/250x180"
  ],
  [
    "title" => "Corsair RM750x",
    "description" => "Fully Modular 80+ Gold | Low-noise fan mode",
    "price" => "₱6,995.00",
    "image" => "https://via.placeholder.com/250x180"
  ],
  [
    "title" => "Seasonic Focus GX-850",
    "description" => "850W 80+ Gold Certified | Compact Size",
    "price" => "₱8,199.00",
    "image" => "https://via.placeholder.com/250x180"
  ],
  [
    "title" => "EVGA SuperNOVA 850 G6",
    "description" => "80+ Gold | Fully Modular | 10-Year Warranty",
    "price" => "₱8,750.00",
    "image" => "https://via.placeholder.com/250x180"
  ],
];
?>

<div class="new-container">
  <?php foreach ($topSellers as $product): ?>
    <div class="new-card">
      <img src="<?= $product['image'] ?>" alt="Product Image">
      <div class="new-info">
        <h3 class="new-title"><?= $product['title'] ?></h3>
        <p class="new-description"><?= $product['description'] ?></p>
        <p class="new-price"><?= $product['price'] ?></p>
        <a href="#" class="new-button">Buy Now</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
</div>

<footer class="bg-dark text-white pt-4 pb-3 mt-5">
  <div class="container text-center text-md-start">
    <div class="row">
      <!-- About -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase">YourBrand</h5>
        <p>
          Quality tech products at great prices. Trusted by hundreds of customers nationwide.
        </p>
      </div>

      <!-- Links -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase">Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Home</a></li>
          <li><a href="#" class="text-white text-decoration-none">Shop</a></li>
          <li><a href="#" class="text-white text-decoration-none">About</a></li>
          <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase">Contact</h5>
        <p>Email: support@example.com</p>
        <p>Phone: +63 900 000 0000</p>
      </div>

      <!-- Social -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase">Follow Us</h5>
        <a href="https://www.facebook.com/" class="text-white me-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center mt-3 border-top pt-3">
      <small>© 2025 YourBrand. All rights reserved.</small>
    </div>
  </div>
</footer>

  <script>
  let currentIndex = 0;
  const slides = document.querySelector('.slides');
  const dotsContainer = document.querySelector('.dots');
  const totalSlides = document.querySelectorAll('.slide').length;

  // Create Dots
  for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('span');
    dot.addEventListener('click', () => moveToSlide(i));
    dotsContainer.appendChild(dot);
  }

  function moveToSlide(index) {
    slides.style.transform = `translateX(-${index * 100}%)`;
    currentIndex = index;
    updateDots();
  }

  function updateDots() {
    const dots = document.querySelectorAll('.dots span');
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex].classList.add('active');
  }

  // Auto Slide Every 3 Seconds
  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    moveToSlide(currentIndex);
  }, 3000);

  // Initial Setup
  moveToSlide(0);
</script>
<script src="bootstrap-5.3.5-dist/js/bootstrap.min.js"></script>

</body>
</html>