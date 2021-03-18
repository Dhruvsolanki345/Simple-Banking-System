<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">
    <title>TSF Bank</title>
  </head>
  <body>
    <div class="main-container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer_all.php">View Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transaction.php">Transaction History</a>
              </li>
            </ul>
            <span class="navbar-brand">
              TSF Bank
            </span>
          </div>
        </div>
      </nav>
      <div class="container text-center center" style="color: rgb(255, 255, 255);">
        <h1>Welecome to TSF Bank</h1>
        <h4>This Basic Banking System helps to transfer money between users</h4>
        <h4>It's a simple process , you just need to click on "Transfer button" present on the right side of the user and it will automatically jump to next page
          where you need to select the user to whom you want to transfer money and the amount you want to transfer.</h4>
        <div class="button">
          <a href="customers_all.php" class="menu-btn">Get Started</a>
        </div>
      </div>
    </div>
<?php
include 'footer.php';
?>