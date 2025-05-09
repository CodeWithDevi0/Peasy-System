    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Peasy </title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-success px-4 py-2">
  <div class="container-fluid">
    <!-- Logo and Brand -->
    <a class="navbar-brand d-flex align-items-center text-white" href="#">
      <img src="../assets/nobg.png" alt="Logo" width="60" height="60" class="me-2">
      <strong>PEasy</strong>
    </a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Right Nav Icons -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="#"><i class="bi bi-bag fs-4"></i></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="#"><i class="bi bi-chat-left fs-4"></i></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white d-flex align-items-center" href="../Authentication/signIn/login.php">
            <i class="bi bi-person-fill-exclamation fs-3 me-1"></i> <span>Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white d-flex align-items-center" href="../Authentication/register/create.php">
            <i class="bi bi-person-exclamation fs-3 me-1"></i> <span>Register</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--navigation ni boss-->
<ul class="nav fs-5 justify-content-center mt-2">
  <li class="nav-item nav-pills ">
    <a class="nav-link active bg-success" aria-current="page" href="../guest/index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="../guest/build.php">Build A PC</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#">Laptops</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#">Computers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#">Price List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-dark" aria-disabled="true">Disabled</a>
  </li>
</ul>


<div class="container my-4">
  <!-- carousel here -->


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../assets/mainCarousel.png" class="d-block w-100" alt="..." width="780" height="450" style="max-height: 450px; object-fit: cover;"> 
    
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../assets/carouselCase.png" class="d-block w-100" alt="..." width="780" height="450" style="max-height: 450px; object-fit: cover;">
   
    </div>
    <div class="carousel-item">
      <img src="../assets/acerCAROUSEL.png" class="d-block w-100" alt="..." width="780" height="450" style="max-height: 450px; object-fit: cover;">
     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>