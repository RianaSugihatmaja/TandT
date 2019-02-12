<?php echo file_get_contents("header.html"); ?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Accessories</li>
    </ol>
   </nav>
  <div class="row">
  <div class="col col-lg-2">
    <ul class="nav flex-sm-column">
      <li class="nav-item"><a class="nav-link active" href="notes.php">Notebooks</a></li>
      <li class="nav-item"><a class="nav-link active" href="hijabs.php">Hijabs</a></li>
      <li class="nav-item"><a class="nav-link active" href="womensWear.php">Women's Wear</a></li>
      <li class="nav-item"><a class="nav-link active" href="accessories.php">Accessories</a></li>
    </ul>
    </div>
    <div class="col-10">
    <h1>ACCESSORIES</h1>
    <br>
      <div class="row">
        <div class="col">
        <a href="cart.php"><img src="img/hijab0.jpg" alt="Hijab Pic" height="200px" width="180px"></a>
        <br><caption>Hijab Pattern in Nude</caption>  
        </div>
        <div class="col">
        <a href="cart.php"><img src="img/hijab1.jpg" alt="Hijab Pic" height="200px" width="180px"></a>
        <br><caption>Hijab Pattern in Grey</caption>
        </div>
        <div class="col">
        <a href="cart.php"><img src="img/hijab2.jpg" alt="Hijab Pic" height="200px" width="180px"></a>
        <br><caption>Hijab Pattern in Beige</caption>
        </div>
        <div class="col">
        <a href="cart.php"><img src="img/hijab3.jpg" alt="Hijab Pic" height="200px" width="180px"></a>
        <br><caption>Hijab Pattern in Green</caption>
        </div>
      </div>
    </div>
</div>   
</div>
<?php echo file_get_contents("footer.html"); ?>