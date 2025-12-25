<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>food</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/pp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Food D Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="offer.php">Offer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">   Cart</a>
        </li>
        </ul>
      <form class="d-flex" method="POST" action="product.php" >
        <input class="form-control me-2" type="text" placeholder="Search" name="search"  id="search">
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
  </div>
</nav>


