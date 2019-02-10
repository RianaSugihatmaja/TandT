<?php echo file_get_contents("header.html"); ?>
<style>
.nav-link{
  text-decoration: none;
  list-style-type: none;
  color: #000000;
}
.container{
  padding-top: 1rem;
  padding-bottom: 1rem;
  margin-right: 0;
  margin-left: 0;
}
</style>

<div class="container">
  <div class="row">
  <div class="col col-lg-2">
    <ul class="nav flex-sm-column">
      <li class="nav-item"><a class="nav-link active" href="notes.html">Note Books</a></li>
      <li class="nav-item"><a class="nav-link active" href="hijabs.html">Hijabs</a></li>
      <li class="nav-item"><a class="nav-link active" href="womensWear.html">Women's Wear</a></li>
      <li class="nav-item"><a class="nav-link active" href="accessories.html">Accessories</a></li>
    </ul>
    </div>
    <div class="col-10">
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
      </div>
    </div>
</div>   
</div>
  <?php echo file_get_contents("footer.html"); ?>