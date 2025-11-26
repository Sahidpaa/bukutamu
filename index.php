<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Data Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=bukutamu">Buku Tamu</a> </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">User</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container my-4">
    <?php
      $page = isset($_GET['p']) ? $_GET['p'] : 'home';  //operator ternay bntuk singkat if else
      echo $page;
      if($page == 'home') include 'home.php';
      if($page == 'bukutamu') include 'list.php';
      if($page == 'create') include 'create.php';
      if($page == 'edit') include 'edit.php';
    ?> 
  
  </div>
</body>
</html>
