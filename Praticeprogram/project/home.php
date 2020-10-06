<?php
session_start();
?>
<!doctype html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<head>
<title>
USER LOGIN
</title>
<style>
/* body{
    background-color: #33ccff;
} */
button
{
border-radius:20px;
padding: 5px 10px 5px 10px;
border-color:linear-gradient(to top right, #33ccff 1%, #ff99cc 57%);
}
nav{
    background: linear-gradient(to bottom, #33ccff 0%, #3333cc 100%);
}
</style>
</head>
<body align="center" style="background-color:#33ccff">
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Gamestore</a>
  <?php
if(isset($_POST['light'])=="black")
{
session_destroy();
header('Location: http://localhost/Praticeprogram/project/login.php');
}
if(isset($_POST['product'])=="data")
{
header('Location: http://localhost/Praticeprogram/project/productdetails.php');
}
?>

  <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
  <div>
  <?php
if(isset($_SESSION["name"])){
$name=$_SESSION["name"];
echo ("<b>$name</b>");
}
else
{
    $name="";
}
?></div>
  <button name="product" value="data">Add</button>
    <button name="light" value="black">Logout</button>
  </form>
</nav>
<br>
<div class="container">
 <!-- carousel starts here -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./fortnite.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./remant.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./fortnite.jpg" alt="third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- carousel ends here -->

        <br>

    <div class="container">
        <div class="row" style="display: flex; justify-content: space-between;">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./fortnite.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fortnite</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Buy</a>
              <a href='index.php?pId="p1"'>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
              </a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./remant.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Remant</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Buy</a>
              <a href='index.php?pId="p2"'>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
              </a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./fortnite.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fortnite</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Buy</a>
              <a href='index.php?pId="p3"'>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
              </a>
            </div>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</div></body>
</html>
