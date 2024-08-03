<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eCommerce Website</title>


  <link rel="stylesheet" href="style.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
  #single1 {
  text-align:center;
  }
  #single1 .product{
  width: 22%;
  min-width: 240px;
  padding:10px 12px;
  border: 1px solid #cce7d0;
  margin:25px 0;
  /* height: 450px; */
  position: relative;
  }
  #single1 .product img {
    width: 100%;
    border-radius:10px;
  
  }
  #single1 .product-container {
    display:flex;
    max-width: 70%;
    margin:10px auto;
    flex-wrap:wrap;
    /* justify-content:space-around; */
    gap:30px;
  }
  #single1 .product .des{
    text-align:start;
    padding:10px 0;
  }

  #single1 .product .des h2{

    color: var(--eerie-black);
    font-size: var(--fs-7);
    font-weight: var(--weight-600);
    text-transform: uppercase;
  }

  #single1 .product .des span{
    color:#6066063;
    font-size:12px;
  }
/*  #single1 .product .des h5{
    padding-top:7px;
    color:#1a1a1a;
    font-size:14px;
  }*/
  #single1 .product .des i{
    font-size:12px;
    color :rgb(243, 181, 25);
    margin-bottom:80px;
  }
  #single1 .product .des h4{
    padding-top:7px;
    font-size:15px;
    font-weight:700;
    color:#088178;
    position:absolute;
    bottom:20px;
  }
  #single1 .product .cart{
    width: 40px;
    height: 40px;
    line-height:40px;
    border-radius:50px;
    background-color:#e8f6ea;
    /* font-weight:500; */
    color:#088178;
    position: absolute;
    bottom:5px;
    right:10px;
  }
</style>

</head>

<body>

<!-- Product -->
<?php
include 'navbar.php';
?>

<!--  -Carousel- -->
 <!-- Banner -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./assets/images/banner-4.jpg" style="width:100%">
      <!-- <div class="b1">Caption Text</div> -->
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./assets/images/banner-5.jpg" style="width:100%">
      <!-- <div class="b1">Caption Two</div> -->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="./assets/images/banner-6.jpeg" style="width:100%">
      <!-- <div class="b1">Caption Two</div> -->
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

  </div>
    <br><br>
<!-- Cart Section -->
                               
<section id="single1" class="section-p1">
<!-- Smartphone -->
 <div class="headline text-center">
  <h2>Smart</h2>
 </div>
  <div class="product-container product-list">
      <?php
                $sql= "select * from product where Category='Smartphone' ";
                $r= mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($r)) 
                    { 

                          ?>

    <div class="product">
      <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
      <div class="des">
        <h2><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2>
        <h2><a style="color: black;font-weight: 400;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></h2>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <h2 class="product-title rp" style="color: black;font-weight: 550;">Rs-<?php echo $row['SP']; ?></h2>
      </div> <!-- des close -->
      <a href="productdetails.php?id=<?php echo $row['ID']?>" ><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div> <!-- pro close -->
        <?php
                    } 
                            ?>
    </div> <!-- product-list close -->
<br>

<!-- Laptop -->
 <div class="headline text-center">
  <h2>Laptop</h2>
 </div>
  <div class="product-container product-list">
      <?php
                $sql= "select * from product where Category='Laptop' ";
                $r= mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($r)) 
                    { 

                          ?>

    <div class="product">
      <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
      <div class="des">
        <h2 class="product-title"><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2>
        <h2><a style="color: black;font-weight: 400;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></h2>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <h2 class="product-title rp" style="color: black;font-weight: 550;">Rs-<?php echo $row['SP']; ?></h2>
      </div> <!-- des close -->
      <a href="productdetails.php?id=<?php echo $row['ID']?>" ><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div> <!-- pro close -->
        <?php
                    } 
                            ?>
    </div> <!-- product-list close --><br>

<!-- Headphone -->
 <div class="headline text-center">
  <h2>Headphone</h2>
 </div>
  <div class="product-container product-list">
      <?php
                $sql= "select * from product where Category='Headphone' ";
                $r= mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($r)) 
                    { 

                          ?>

    <div class="product">
      <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
      <div class="des">
        <h2 class="product-title"><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2>
        <h2><a style="color: black;font-weight: 400;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></h2>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <h2 class="product-title rp" style="color: black;font-weight: 550;">Rs-<?php echo $row['SP']; ?></h2>
      </div> <!-- des close -->
      <a href="productdetails.php?id=<?php echo $row['ID']?>" ><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div> <!-- pro close -->
        <?php
                    } 
                            ?>
    </div> <!-- product-list close --><br>

<!--  -->
 <div class="headline text-center">
  <h2>Smart Watch</h2>
 </div>
  <div class="product-container product-list">
      <?php
                $sql= "select * from product where Category='Smart Watch' ";
                $r= mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($r)) 
                    { 

                          ?>

    <div class="product">
      <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
      <div class="des">
        <h2 class="product-title"><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2>
        <h2><a style="color: black;font-weight: 400;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></h2>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <h2 class="product-title rp" style="color: black;font-weight: 550;">Rs-<?php echo $row['SP']; ?></h2>
      </div> <!-- des close -->
      <a href="productdetails.php?id=<?php echo $row['ID']?>" ><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div> <!-- pro close -->
        <?php
                    } 
                            ?>
    </div> <!-- product-list close --><br>

<!-- Graphics Card--> 
  <div class="headline text-center">
  <h2>Graphics Card</h2>
  </div>
  <div class="product-container product-list">
      <?php
                $sql= "select * from product where Category='Graphics Card' ";
                $r= mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($r)) 
                    { 

                          ?>

    <div class="product">
      <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
      <div class="des">
        <h2 class="product-title"><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2>
        <h2><a style="color: black;font-weight: 400;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></h2>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <h2 class="product-title rp" style="color: black;font-weight: 550;">Rs-<?php echo $row['SP']; ?></h2>
      </div> <!-- des close -->
      <a href="productdetails.php?id=<?php echo $row['ID']?>" ><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div> <!-- pro close -->
        <?php
                    } 
                            ?>
    </div> <!-- product-list close --><br>

<!-- Keyboard -->
 <div class="headline text-center">
  <h2>Keyboard</h2>
 </div>
  <div class="product-container product-list">
      <?php
                $sql= "select * from product where Category='Keyboard' ";
                $r= mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($r)) 
                    { 

                          ?>

    <div class="product">
      <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
      <div class="des">
        <h2><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2>
        <h2><a style="color: black;font-weight: 400;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></h2>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <h2 class="product-title rp" style="color: black;font-weight: 550;">Rs-<?php echo $row['SP']; ?></h2>
      </div> <!-- des close -->
      <a href="productdetails.php?id=<?php echo $row['ID']?>" ><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div> <!-- pro close -->
        <?php
                    } 
                            ?>
    </div> <!-- product-list close -->
<br>

<!-- Mouse -->
 <div class="headline text-center">
  <h2>Mouse</h2>
 </div>
  <div class="product-container product-list">
      <?php
                $sql= "select * from product where Category='Mouse' ";
                $r= mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($r)) 
                    { 

                          ?>

    <div class="product">
      <img src="Admin/<?php echo $row['Image']; ?>" alt="" class="product-img">
      <div class="des">
        <h2><a style="color: black;" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Description']; ?></a></h2>
        <h2><a style="color: black;font-weight: 400;" class="product-title" href="productdetails.php?id=<?php echo $row['ID']?>" ><?php echo $row['Name']; ?></a></h2>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        <h2 class="product-title rp" style="color: black;font-weight: 550;">Rs-<?php echo $row['SP']; ?></h2>
      </div> <!-- des close -->
      <a href="productdetails.php?id=<?php echo $row['ID']?>" ><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div> <!-- pro close -->
        <?php
                    } 
                            ?>
    </div> <!-- product-list close -->
<br>

</section>

  <br>  <!-- Footer -->          
<!-- <?php
include 'footer.php';
?> -->
              
  <!--
    - custom js link
  -->
  <script src="script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>