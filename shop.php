<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EcoBazar</title>
   <link rel="shortcut icon" href="./assets/img/fav.png" type="image/x-icon">
   <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet" />

   <!-- *Swipper Cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <!-- *Swipper Cdn -->

   <!-- *Icon Cdn -->
   <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
   <!-- *Icon Cdn -->

   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/shop.css">
   <link rel="stylesheet" href="./assets/css/shopResponsiv.css">
</head>

<body>
   <header>
      <!-- *Top Bar Section start -->
      <section id="topBar">
         <div class="container">
            <div class="row align-items-center">
               <div
                  class="col-lg-6 col d-flex align-items-center justify-content-lg-start justify-content-center location">
                  <iconify-icon icon="fluent:location-20-regular"></iconify-icon>
                  <p>Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
               </div>
               <div class="col-lg-6 d-lg-flex d-none align-items-center justify-content-end quickActions">
                  <form action="">
                     <select>
                        <option>Eng</option>
                        <option>Bn</option>
                        <option>Hin</option>
                     </select>
                     <select>
                        <option>Usd</option>
                        <option>Bdt</option>
                        <option>Rp</option>
                     </select>
                  </form>
                  <a href="Register.html">Sign In / Sign Up</a>
               </div>
            </div>
         </div>
      </section>
      <!-- *Top Bar Section end -->

      <!-- *Middle Bar Section Desktop start -->
      <section id="middleBar" class="d-none d-lg-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-3">
                  <div class="logo">
                     <a href="index.html"><img class="img-fluid" src="./assets/img/Logo.png"></a>
                  </div>
               </div>
               <div class="col-6 d-flex align-items-center">
                  <div class="searchBoxLg">
                     <iconify-icon icon="cuida:search-outline"></iconify-icon>
                     <input type="search" placeholder="Search">
                  </div>
                  <button class="searchBtn" type="button">Search</button>
               </div>
               <div class="col-3 d-flex align-items-center justify-content-end actionLinks">
                  <iconify-icon icon="solar:heart-outline"></iconify-icon>
                  <!-- *Cart Icon added with sideBar -->

                  <div class="cartIcon">
                     <button type="button" data-bs-toggle="offcanvas" data-bs-target="#cartSideBar"
                        aria-controls="offcanvasWithBothOptions">
                        <iconify-icon icon="lets-icons:bag-alt"></iconify-icon>
                        <div class="quantity">2</div>
                     </button>
                  </div>


                  <!-- *Cart Icon added with sideBar -->
                  <div class="paymentDetails">
                     <p>Shopping cart:</p>
                     <h5>$57.00</h5>
                  </div>
               </div>
            </div>
         </div>
         <!-- *Cart Sidebar Start -->
         <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="cartSideBar"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
               <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Shopping Card (2)</h5>
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="row align-items-center product">
                  <div class="col-5"><img class="img-fluid" src="./assets/img/product.png" alt=""></div>
                  <div class="col-6">
                     <h6>Fresh Indian Orange</h6>
                     <p>1 kg x <span>12.00</span></p>
                  </div>
                  <div class="col-1">
                     <iconify-icon icon="charm:cross"></iconify-icon>
                  </div>
               </div>
               <div class="row align-items-center product">
                  <div class="col-5"><img class="img-fluid" src="./assets/img/product_1.png" alt=""></div>
                  <div class="col-6">
                     <h6>Green Apple</h6>
                     <p>1 kg x <span>14.00</span></p>
                  </div>
                  <div class="col-1">
                     <iconify-icon icon="charm:cross"></iconify-icon>
                  </div>
               </div>
            </div>
         </div>

         <!-- *Cart Sidebar End -->
      </section>
      <!-- *Middle Bar Section Desktop end -->

      <!-- *Middle Bar Section Mobile start -->
      <section id="middleBarSm" class="d-lg-none">
         <div class="container">
            <div class="row align-items-center">
               <!-- *Menu Sidebar Start-->
               <div class="col-3">
                  <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                     aria-controls="offcanvasScrolling">
                     <iconify-icon icon="gg:menu-left-alt"></iconify-icon>
                  </button>
               </div>
               <!-- *Menu Sidebar End-->
               <div class="col-6 d-flex justify-content-center">
                  <div class="logo">
                     <a href="index.html"><img src="./assets/img/Logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-3 text-end searchMob">
                  <iconify-icon icon="cuida:search-outline"></iconify-icon>
               </div>
            </div>
         </div>

         <!-- *Menu sidebar body start -->
         <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
               <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><img class="img-fluid"
                     src="./assets/img/Logo.png" alt=""></h5>
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-start menuSide">
               <ul>
                  <li><a href="index.html">Home</a></li>
                  <li class="shopCollapse">
                     <div class="row align-items-center">
                        <div class="col-6"><a href="shop.html">Shop</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-right-bold"></iconify-icon>
                        </div>
                     </div>
                     <nav>
                        <ul class="shopOpen">
                           <li><a href="#">Food</a></li>
                           <li><a href="#">Baby Food & Care</a></li>
                           <li><a href="#">Home Cleaning</a></li>
                           <li><a href="#">Beauty & Health</a></li>
                           <li><a href="#">Fashion & Lifestyle</a></li>
                           <li><a href="#">Home & Kitchen</a></li>
                           <li><a href="#">Stationeries</a></li>
                        </ul>
                     </nav>
                  </li>
                  <li class="shopCollapse">
                     <div class="row">
                        <div class="col-6"><a href="#">Pages</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-right-bold"></iconify-icon>
                        </div>
                     </div>
                     <ul class="shopOpen">
                        <li><a href="#">24/7 Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                     </ul>
                  </li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
               </ul>
            </div>
         </div>
         <!-- *Menu sidebar body End -->

         <!-- *Search Box Mobile Start Here -->
         <section id="searchBoxMobile" class="searchBoxMobile">
            <div class="container">
               <div class="closeBtnSearch">
                  <iconify-icon icon="charm:cross"></iconify-icon>
               </div>
               <div class="row">
                  <div class="col d-flex searchBoxMenu">
                     <iconify-icon icon="majesticons:search-line"></iconify-icon>
                     <input type="search" placeholder="Search">
                     <button>Search</button>
                  </div>
               </div>
               <div class="searchResult">
                  <p>Showing Result for: <span>Search</span></p>
               </div>
               <div class="row">
                  <div class="col-6 searchProductCnt">
                     <a href="#"><img class="img-fluid" src="./assets/img/Product Image.png"></a>
                     <div class="productDetails">
                        <h5>Indian Green Apple</h5>
                        <p>$14.99 <del>$20.99</del></p>
                     </div>
                  </div>
                  <div class="col-6 searchProductCnt">
                     <a href="#"><img class="img-fluid" src="./assets/img/Product Image (1).png"></a>
                     <div class="productDetails">
                        <h5>Surjapur Mango</h5>
                        <p>$14.99</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- *Search Box Mobile End Here -->
      </section>
      <!-- *Middle Bar Section Mobile end -->

      <!-- *Bottom NavBar Mobile Start -->
      <section id="bottomNavBar" class="bottomNavBar d-lg-none">
         <div class="container">
            <div class="row justify-content-evenly align-items-center mt-3">
               <div class="col-3 ">
                  <a href="index.html">
                     <iconify-icon icon="lucide:home"></iconify-icon>
                  </a>
               </div>
               <div class="col-3 active">
                  <a href="shop.html">
                     <iconify-icon icon="mage:shop"></iconify-icon>
                  </a>
               </div>
               <div class="col-3">
                  <a href="">
                     <iconify-icon icon="lets-icons:bag-alt"></iconify-icon>
                  </a>
               </div>
               <div class="col-3">
                  <a href="Register.html">
                     <iconify-icon icon="basil:user-outline"></iconify-icon>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- *Bottom NavBar Mobile End -->


      <!-- *Desktop Nav Bar Start -->
      <section id="nabBarDesk">
         <nav class="d-none d-lg-block navBarDesktop">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-3">
                     <div class="dropdown">
                        <button class="categoryDrop d-flex align-items-center justify-content-evenly" type="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           <iconify-icon icon="lucide:menu"></iconify-icon><span>All
                              Categories</span><iconify-icon icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                        </button>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">Food</a></li>
                           <li><a class="dropdown-item" href="#">Baby Food & Care</a></li>
                           <li><a class="dropdown-item" href="#">Home Cleaning</a></li>
                           <li><a class="dropdown-item" href="#">Beauty & Health</a></li>
                           <li><a class="dropdown-item" href="#">Fashion & Lifestyle</a></li>
                           <li><a class="dropdown-item" href="#">Home & Kitchen</a></li>
                           <li><a class="dropdown-item" href="#">Stationeries</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-7 middleNav">
                     <ul class="d-flex align-items-center justify-content-start">
                        <li><a class="" href="index.html">Home</a></li>
                        <li class="desktopParent">
                           <a class="d-flex align-items-center active" href="shop.html">Shop <iconify-icon
                                 icon="iconamoon:arrow-down-2-bold"></iconify-icon></a>
                           <ul class="desktopChild">
                              <li><a href="#">Food</a></li>
                              <li><a href="#">Baby Food & Care</a></li>
                              <li><a href="#">Home Cleaning</a></li>
                              <li><a href="#">Beauty & Health</a></li>
                              <li><a href="#">Fashion & Lifestyle</a></li>
                              <li><a href="#">Home & Kitchen</a></li>
                              <li><a href="#">Stationeries</a></li>
                           </ul>
                        </li>
                        <li class="desktopParent"><a class="d-flex align-items-center" href="#">Pages
                              <iconify-icon icon="iconamoon:arrow-down-2-bold"></iconify-icon></a>
                           <ul class="desktopChild">
                              <li><a href="#">24/7 Support</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                           </ul>
                        </li>
                        <li><a class="" href="#">Blog</a></li>
                        <li><a class="" href="#">About Us</a></li>
                        <li><a class="" href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-2 d-flex align-items-center quickCall">
                     <iconify-icon icon="ph:phone-call-light"></iconify-icon>
                     <a href="tel:219555-0114">(219) 555-0114</a>
                  </div>
               </div>
            </div>
         </nav>
      </section>
      <!-- *Desktop Nav Bar End -->
   </header>
   <main>
      <!-- *Breadcrumbs Start Here -->
      <section id="Breadcrumbs">
         <div class="container">
            <ul>
               <li class="d-flex align-items-center">
                  <a href="index.html" class="homeIcom">
                     <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
                  </a>
                  <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
               </li>
               <li class="d-flex align-items-center">
                  <a href="shop.html" class="active">Shop</a>
               </li>

            </ul>
         </div>
      </section>
      <!-- *Breadcrumbs End Hear -->

      <section id="allProduct">
         <div class="container">
            <div class="row">

               <!-- *Filtering Start Here -->
               <section id="filtering" class="col-lg-3 d-none d-lg-block">
                  <div class="filterBtn">
                     <button type="button">Filter
                     </button>
                     <span>
                        <iconify-icon icon="rivet-icons:filter" width="20" height="20"></iconify-icon>
                     </span>
                  </div>
                  <div class="categories">
                     <div class="row align-items-center categoreBtn">
                        <div class="col-6 radioParent"><a type="button">All Categories</a></div>
                        <div class="col-6 text-end">
                           <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                        </div>
                     </div>
                     <li class="shopCollapse">
                        <ul class="shopOpen active">
                           <li>
                              <input type="radio" id="Fresh" name="Categories">
                              <label for="Fresh">Fresh Fruit (25)<span>(134)</span></label>
                           </li>
                           <li>
                              <input type="radio" id="Vegetables" name="Categories">
                              <label for="Vegetables">Vegetables<span>(150)</span></label>
                           </li>
                           <li>
                              <input type="radio" id="Cooking" name="Categories">
                              <label for="Cooking">Cooking<span>(54)</span></label>
                           </li>
                           <li>
                              <input type="radio" id="Snacks" name="Categories">
                              <label for="Snacks">Snacks<span>(47)</span></label>
                           </li>
                           <li>
                              <input type="radio" id="Beverages" name="Categories">
                              <label for="Beverages">Beverages<span>(43)</span></label>
                           </li>
                           <li>
                              <input type="radio" id="Beauty" name="Categories">
                              <label for="Beauty">Beauty & Health<span>(38)</span></label>
                           </li>
                           <li>
                              <input type="radio" id="Bread" name="Categories">
                              <label for="Bread">Bread & Bakery<span>(15)</span></label>
                           </li>
                        </ul>
                     </li>
                  </div>
               </section>
               <!-- *Filtering End Hear -->


               <!-- *Products Start Here -->
               <section id="product" class="col-lg-9 col-12">
                  <!-- *category Start Here -->
                  <section id="category">
                     <div class="row">
                        <div class="sortBox col-lg-6">
                           <span>Sort by :</span>
                           <select>
                              <option value="1">Latest</option>
                           </select>
                        </div>
                        <div class="col-lg-6">
                           <h6 class="text-lg-end text-start mt-2 mt-lg-0"><span>52</span>Results Found</h6>
                        </div>
                     </div>
                  </section>

                  <!-- *Product Card Box Start Here -->
                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_catalog";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<section id="ProductCardBox">
    <div class="row justify-content-center">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="cart <?php echo $row['category']; ?>">
                    <a href="#">
                        <div class="imgBox">
                            <img class="img-fluid" src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                        </div>
                        <div class="details">
                            <a href="#"><?php echo $row['name']; ?></a>
                            <div class="priceAndCard d-flex align-items-center justify-content-between">
                                <div class="price">
                                    <span class="col-2">$<?php echo $row['price']; ?></span>
                                    <?php if ($row['old_price']) { ?>
                                        <span class="col-3 oldPrice">$<?php echo $row['old_price']; ?></span>
                                    <?php } ?>
                                </div>
                                <span class="text-end col-6 addCatdBtn">
                                    <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                </span>
                            </div>
                            <div class="review">
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    if ($i < $row['rating']) {
                                        echo '<iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>';
                                    } else {
                                        echo '<iconify-icon icon="heroicons:star-20-solid" width="20" height="20" style="color: #b3b3b3"></iconify-icon>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
        } else {
            echo "No products available.";
        }
        ?>
    </div>
</section>

                  <!-- *Product Card Box End Hear -->
                  <!-- *category End Hear -->
               </section>
               <!-- *Products End Hear -->


            </div>
         </div>
      </section>

   </main>
   <!-- *Footer Start Here -->
   <footer>
      <!-- *Footer top Start Here -->
      <section id="FooterTop">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 leftSide">
                  <div class="logo d-flex align-items-center">
                     <img class="img-fluid" src="./assets/img/fav.png" alt="Logo.png"><span>Ecobazar</span>
                  </div>
                  <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna congue
                     nec.
                  </p>
                  <span><a href="tel:555-0114">(219) 555-0114</a> or</span>
                  <span><a href="#">Proxy@gmail.com</a></span>
               </div>
               <div class="col-lg-8 rightSide">
                  <div class="row">
                     <ul class="col-lg-3 col-6">
                        <h4>My Account</h4>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Order History</a></li>
                        <li><a href="">Shoping Cart</a></li>
                        <li><a href="">Wishlist</a></li>
                     </ul>
                     <ul class="col-lg-3 col-6">
                        <h4>Helps</h4>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Faqs</a></li>
                        <li><a href="">Terms & Condition</a></li>
                        <li><a href="">Wishlist</a></li>
                     </ul>
                     <ul class="col-lg-3 col-6">
                        <h4>Proxy</h4>
                        <li><a href="">About</a></li>
                        <li><a href="">Shop</a></li>
                        <li><a href="">Product</a></li>
                        <li><a href="">Track Order</a></li>
                     </ul>
                     <ul class="col-lg-3 col-6">
                        <h4>Categories</h4>
                        <li><a href="">Fruit & Vegetables</a></li>
                        <li><a href="">Meat & Fish</a></li>
                        <li><a href="">Bread & Bakery</a></li>
                        <li><a href="">Beauty & Health</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Footer top End Hear -->
      <!-- *copy Right Start Here -->
      <section id="copyRight">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                  <p>Ecobazar eCommerce © 2021. All Rights Reserved</p>
               </div>
               <div class="col-12 col-lg-6 text-lg-end">
                  <a href="#">
                     <img src="./assets/img/ApplePay.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Visa.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Discover.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Mastercard.png" alt="">
                  </a>
                  <a href="#">
                     <img src="./assets/img/Cart.png" alt="">
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- *copy Right End Hear -->
   </footer>
   <!-- *Footer End Hear -->
   <script src="./assets/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/js/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/shop.js"></script>
</body>

</html>