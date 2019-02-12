<?php echo file_get_contents("header.html");?>
<div class="container">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Notebooks</li>
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
    <h1>NOTEBOOKS</h1>
    <br>
      <div class="row">
        <div class="col">
        <a href="cart.php"><img src="img/book0.jpg" alt="Book Pic" height="200px" width="200px"></a>
        <br><caption>Journal Basic</caption>  
      </div>
        <div class="col">
        <a href="cart.php"><img src="img/book1.jpg" alt="Book Pic" height="200px" width="200px"></a>
        <br><caption>Agenda Basic</caption>
        </div>
        <div class="col">
        <a href="cart.php"><img src="img/book2.png" alt="Book Pic" height="200px" width="200px"></a>
        <br><caption>Diary Basic</caption>
        </div>
        <div class="col">
        <a href="cart.php"><img src="img/book3.jpg" alt="Book Pic" height="200px" width="200px"></a>
        <br><caption>Schedule Book</caption>
        </div>
        <div class="col">
        <a href="cart.php"><img src="img/book4.jpg" alt="Book Pic" height="200px" width="200px"></a>
        <br><caption>Sketch Book</caption>
        </div>
      </div>
    </div>
</div>   
</div>

<?php echo file_get_contents("footer.html"); ?>