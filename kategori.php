<?php 

try {
     $db = new PDO("mysql:host=localhost;dbname=odev_db", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

$kid=$_GET["kid"];
if(isset($_GET['pid']))
{
 $query = $db->prepare("DELETE FROM sepet WHERE sepet_id = :id");
$delete = $query->execute(array(
   'id' => $_GET['pid']
));
}
$query = $db->query("SELECT sum(fiyat*adet) as toplam, COUNT(sepet_id) as sepetsayi FROM sepet INNER JOIN kitap ON kitap.id = sepet.id", PDO::FETCH_ASSOC); 
	 if ( $query->rowCount() ){
     foreach( $query as $row ){ $toplamsayi=$row['toplam']; } } 

?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pustok - Book Store HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<style> 
	.buttons2 {
		background-color: #62ab00; /* Green */
		border-radius: 15px;
		border: none;
		color: white;
		padding: 4px 30px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
		}

		.buttons2:hover {
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
	.menuitem {
	border-bottom: 4px solid #d9d9d9;
    padding: 10px 121px 23px 15px;
    color: #555555;
    line-height: 26px;
    text-transform: capitalize;
    font-weight: 400;
    display: block;
	color: #333;
    text-decoration: none;
    font-size: 14px;
	position: relative;
		}
	</style>
</head>

<body>
	<div class="site-wrapper" id="top">
		<div class="site-header d-none d-lg-block">
			<div class="header-middle pt--10 pb--10">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3 ">
							<a href="index.php" class="site-brand">
								<img src="image/logo1.png" alt=""></br>
								&nbsp;&nbsp;&nbsp Kitap oku geleceği doku.
							</a>
						</div>
						<div class="col-lg-3">
							<div class="header-phone ">
								<div class="icon">
									<i class="fas fa-headphones-alt"></i>
								</div>
								<div class="text">
									<p>Free Support 24/7</p>
									<p class="font-weight-bold number">+01-202-555-0181</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-navigation flex-lg-right">
								<ul class="main-menu menu-right ">
									<li class="menu-item has-children">
										<a href="javascript:void(0)">Home <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu">
											<li> <a href="index.php">Home One</a></li>
											<li> <a href="index-2.html">Home Two</a></li>
											<li> <a href="index-3.html">Home Three</a></li>
											<li> <a href="index-4.html">Home Four</a></li>
										</ul>
									</li>
									<!-- Shop -->
									<li class="menu-item has-children mega-menu">
										<a href="javascript:void(0)">shop <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu four-column">
											<li class="cus-col-25">
												<h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
												<ul class="mega-single-block">
													<li><a href="shop-grid.html">Fullwidth</a></li>
													<li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
													<li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-25">
												<h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
												<ul class="mega-single-block">
													<li><a href="shop-list.html">Fullwidth</a></li>
													<li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
													<li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-25">
												<h3 class="menu-title"> <a href="javascript:void(0)">Product Details
														1</a></h3>
												<ul class="mega-single-block">
													<li><a href="product-details.html">Product Details Page</a></li>
													<li><a href="product-details-affiliate.html">Product Details
															Affiliate</a></li>
													<li><a href="product-details-group.html">Product Details Group</a>
													</li>
													<li><a href="product-details-variable.html">Product Details
															Variables</a></li>
												</ul>
											</li>
											<li class="cus-col-25">
												<h3 class="menu-title"><a href="javascript:void(0)">Product Details
														2</a></h3>
												<ul class="mega-single-block">
													<li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
													</li>
													<li><a href="product-details-right-thumbnail.html">Right
															Thumbnail</a></li>
													<li><a href="product-details-left-gallery.html">Left Gallery</a>
													</li>
													<li><a href="product-details-right-gallery.html">Right Gallery</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<!-- Pages -->
									<li class="menu-item has-children">
										<a href="javascript:void(0)">Pages <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu">
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="compare.html">Compare</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											<li><a href="login-register.html">Login Register</a></li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="order-complete.html">Order Complete</a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="contact-2.html">contact 02</a></li>
										</ul>
									</li>
									<!-- Blog -->
									<li class="menu-item has-children mega-menu">
										<a href="javascript:void(0)">Blog <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu three-column">
											<li class="cus-col-33">
												<h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
												<ul class="mega-single-block">
													<li><a href="blog.html">Full Widh (Default)</a></li>
													<li><a href="blog-left-sidebar.html">left Sidebar</a></li>
													<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-33">
												<h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
												<ul class="mega-single-block">
													<!-- <li><a href="blog-list.html">Full Widh (Default)</a></li> -->
													<li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
													<li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-33">
												<h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
												</h3>
												<ul class="mega-single-block">
													<li><a href="blog-details.html">Image Format (Default)</a></li>
													<li><a href="blog-details-gallery.html">Gallery Format</a></li>
													<li><a href="blog-details-audio.html">Audio Format</a></li>
													<li><a href="blog-details-video.html">Video Format</a></li>
													<li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="menu-item">
										<a href="contact.html">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom pb--10">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<nav class="category-nav   ">
								<div>
									<a href="javascript:void(0)" class="category-trigger"><i
											class="fa fa-bars"></i>Browse
										categories</a>
									<ul class="category-menu">
                                        <li class="menuitem"><a  href="kategori.php?kid=Roman"> Roman</a>
                                           
                                        </li>
                                        
										<li class="menuitem"><a href="kategori.php?kid=Çizgi Roman">Çizgi Roman</a>
                                          
                                        </li>
										<li class="menuitem"><a href="kategori.php?kid=Edebiyat">Edebiyat</a>
                                            
                                        </li>
										<li class="menuitem"><a href="kategori.php?kid=Tarih">Tarih</a>
                                            
                                        </li>
										<li class="menuitem"><a href="kategori.php?kid=Bilim">Bilim</a>
                                          
                                        </li>
                                        <li class="menuitem"><a href="kategori.php?kid=Felsefe">Felsefe</a>
                                           
                                        </li>
                                        <li class="menuitem"><a href="#">En Çok Satanlar</a>
                                            
											<div class="card" style="width: 18rem;">
  
                                      
                                    </ul>
								</div>
							</nav>
						</div>
						<div class="col-lg-5">
							<div class="header-search-block">
								<form method="post" action="arama.php">
                                <input  type="text" name="search" placeholder="Kitap veya yazar ara">
                                <button class="ion-ios-search-strong" name="Submit" >Ara</button>
								</form>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="main-navigation flex-lg-right">
								<div class="cart-widget">
									<div class="login-block">
										<input class="buttons buttons2" type="button" onclick="window.location.href='admin/giris.php';" value="Giriş" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                      
									</div>
									<div class="cart-block">
										<div class="cart-total">
											<span class="text-number">
												 <?php echo $sepetsayi=$row['sepetsayi']; ?>
											</span>
											<span class="text-item">
											 Sepetim
											</span>
											<span class="price">
												 ₺<?php echo $toplamsayi=$row['toplam']; ?>
												<i class="fas fa-chevron-down"></i>
											</span>
										</div>
										<div class="cart-dropdown-block">
										<?php  
							    $query = $db->query("SELECT *
FROM sepet
INNER JOIN kitap ON kitap.id = sepet.id", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){                               
                                ?>
                                            <div class=" single-cart-block ">
                                                <div class="cart-product">
                                                    <a href="product-details.php?id=<?php echo $row['id']; ?>" class="image">
                                                        <img src="<?php echo $row['kapak_foto']; ?>" alt="">
                                                    </a>
                                                    <div class="content">
                                                        <h6 class="title"><a href="product-details.php?id<?php echo $row['id']; ?>"><?php echo $row['kitap_adi']; ?></a>
                                                        </h6>
                                                        <p class="price"><span class="qty">1 ×</span><?php echo $row['fiyat']; ?></p>
                                                        <a href="sil.php?pid=<?php echo $row['sepet_id']; ?>" data-toggle="tooltip" title="Delete" class="cross-btn"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
											<?php }}
													?>
											<div class=" single-cart-block ">
												<div class="btn-block">
													<a href="cart.html" class="btn">View Cart <i
															class="fas fa-chevron-right"></i></a>
													<a href="checkout.html" class="btn btn--primary">Check Out <i
															class="fas fa-chevron-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-mobile-menu">
			
			<!--Off Canvas Navigation Start-->
			<aside class="off-canvas-wrapper">
				<div class="btn-close-off-canvas">
					<i class="ion-android-close"></i>
				</div>
				<div class="off-canvas-inner">
					<!-- search box start -->
					<div class="search-box offcanvas">
						<form>
							<form method="post" action="arama.php">
                                <input  type="text" name="search" placeholder="Kitap veya yazar ara">
                                <button class="ion-ios-search-strong" name="Submit" >Ara</button>
								</form>
						</form>
					</div>
					<!-- search box end -->
					<!-- mobile menu start -->
					<div class="mobile-navigation">
						<!-- mobile menu navigation start -->
						<nav class="off-canvas-nav">
							<ul class="mobile-menu main-mobile-menu">
								<li class="menu-item-has-children">
									<a href="#">Home</a>
									<ul class="sub-menu">
										<li> <a href="index.php">Home One</a></li>
										<li> <a href="index-2.html">Home Two</a></li>
										<li> <a href="index-3.html">Home Three</a></li>
										<li> <a href="index-4.html">Home Four</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Blog</a>
									<ul class="sub-menu">
										<li class="menu-item-has-children">
											<a href="#">Blog Grid</a>
											<ul class="sub-menu">
												<li><a href="blog.html">Full Widh (Default)</a></li>
												<li><a href="blog-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Blog List</a>
											<ul class="sub-menu">
												<li><a href="blog-list.html">Full Widh (Default)</a></li>
												<li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Blog Details</a>
											<ul class="sub-menu">
												<li><a href="blog-details.html">Image Format (Default)</a></li>
												<li><a href="blog-details-gallery.html">Gallery Format</a></li>
												<li><a href="blog-details-audio.html">Audio Format</a></li>
												<li><a href="blog-details-video.html">Video Format</a></li>
												<li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Shop</a>
									<ul class="sub-menu">
										<li class="menu-item-has-children">
											<a href="#">Shop Grid</a>
											<ul class="sub-menu">
												<li><a href="shop-grid.html">Fullwidth</a></li>
												<li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
												<li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Shop List</a>
											<ul class="sub-menu">
												<li><a href="shop-list.html">Fullwidth</a></li>
												<li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
												<li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Product Details 1</a>
											<ul class="sub-menu">
												<li><a href="product-details.html">Product Details Page</a></li>
												<li><a href="product-details-affiliate.html">Product Details
														Affiliate</a></li>
												<li><a href="product-details-group.html">Product Details Group</a></li>
												<li><a href="product-details-variable.html">Product Details
														Variables</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Product Details 2</a>
											<ul class="sub-menu">
												<li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
												</li>
												<li><a href="product-details-right-thumbnail.html">Right Thumbnail</a>
												</li>
												<li><a href="product-details-left-gallery.html">Left Gallery</a></li>
												<li><a href="product-details-right-gallery.html">Right Gallery</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="compare.html">Compare</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="login-register.html">Login Register</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="contact-2.html">contact 02</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
						<!-- mobile menu navigation end -->
					</div>
					<!-- mobile menu end -->
					<nav class="off-canvas-nav">
						<ul class="mobile-menu menu-block-2">
							<li class="menu-item-has-children">
								<a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li> <a href="cart.html">USD $</a></li>
									<li> <a href="checkout.html">EUR €</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li>Eng</li>
									<li>Ban</li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">My Account <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li><a href="">My Account</a></li>
									<li><a href="">Order History</a></li>
									<li><a href="">Transactions</a></li>
									<li><a href="">Downloads</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<div class="off-canvas-bottom">
						<div class="contact-list mb--10">
							<a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
							<a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
						</div>
						<div class="off-canvas-social">
							<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
							<a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</aside>
			<!--Off Canvas Navigation End-->
		</div>
		<div class="sticky-init fixed-header common-sticky">
			<div class="container d-none d-lg-block">
				<div class="row align-items-center">
					<div class="col-lg-4">
						<a href="index.php" class="site-brand">
							<img src="image/logo1.png" alt=""></br>
								&nbsp;&nbsp;&nbsp Kitap oku geleceği doku.
						</a>
					</div>
					<div class="col-lg-8">
						<div class="main-navigation flex-lg-right">
							<ul class="main-menu menu-right ">
								<li class="menu-item has-children">
									<a href="javascript:void(0)">Home <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu">
										<li> <a href="index.php">Home One</a></li>
										<li> <a href="index-2.html">Home Two</a></li>
										<li> <a href="index-3.html">Home Three</a></li>
										<li> <a href="index-4.html">Home Four</a></li>
									</ul>
								</li>
								<!-- Shop -->
								<li class="menu-item has-children mega-menu">
									<a href="javascript:void(0)">shop <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu four-column">
										<li class="cus-col-25">
											<h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
											<ul class="mega-single-block">
												<li><a href="shop-grid.html">Fullwidth</a></li>
												<li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
												<li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-25">
											<h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
											<ul class="mega-single-block">
												<li><a href="shop-list.html">Fullwidth</a></li>
												<li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
												<li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-25">
											<h3 class="menu-title"> <a href="javascript:void(0)">Product Details 1</a>
											</h3>
											<ul class="mega-single-block">
												<li><a href="product-details.html">Product Details Page</a></li>
												<li><a href="product-details-affiliate.html">Product Details
														Affiliate</a></li>
												<li><a href="product-details-group.html">Product Details Group</a></li>
												<li><a href="product-details-variable.html">Product Details
														Variables</a></li>
											</ul>
										</li>
										<li class="cus-col-25">
											<h3 class="menu-title"><a href="javascript:void(0)">Product Details 2</a>
											</h3>
											<ul class="mega-single-block">
												<li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
												</li>
												<li><a href="product-details-right-thumbnail.html">Right Thumbnail</a>
												</li>
												<li><a href="product-details-left-gallery.html">Left Gallery</a></li>
												<li><a href="product-details-right-gallery.html">Right Gallery</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<!-- Pages -->
								<li class="menu-item has-children">
									<a href="javascript:void(0)">Pages <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu">
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="compare.html">Compare</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="login-register.html">Login Register</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="contact-2.html">contact 02</a></li>
									</ul>
								</li>
								<!-- Blog -->
								<li class="menu-item has-children mega-menu">
									<a href="javascript:void(0)">Blog <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu three-column">
										<li class="cus-col-33">
											<h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
											<ul class="mega-single-block">
												<li><a href="blog.html">Full Widh (Default)</a></li>
												<li><a href="blog-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-33">
											<h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
											<ul class="mega-single-block">
												<!-- <li><a href="blog-list.html">Full Widh (Default)</a></li> -->
												<li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-33">
											<h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a></h3>
											<ul class="mega-single-block">
												<li><a href="blog-details.html">Image Format (Default)</a></li>
												<li><a href="blog-details-gallery.html">Gallery Format</a></li>
												<li><a href="blog-details-audio.html">Audio Format</a></li>
												<li><a href="blog-details-video.html">Video Format</a></li>
												<li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item">
									<a href="contact.html">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">Shop</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<h2 style="margin-left: 402px;"> <?php echo $kid; ?> </h2>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="shop-toolbar mb--30">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<a href="#" class="sorting-btn" data-target="grid-four">
									<span class="grid-four-icon">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
						<div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
							<span class="toolbar-status">
								Showing 1 to 9 of 14 (2 Pages)
							</span>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
							<div class="sorting-selection">
								<span>Show:</span>
								<select class="form-control nice-select sort-select">
									<option value="" selected="selected">3</option>
									<option value="">9</option>
									<option value="">5</option>
									<option value="">10</option>
									<option value="">12</option>
								</select>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								<span>Sort By:</span>
								<select class="form-control nice-select sort-select mr-0">
									<option value="" selected="selected">Default Sorting</option>
									<option value="">Sort
										By:Name (A - Z)</option>
									<option value="">Sort
										By:Name (Z - A)</option>
									<option value="">Sort
										By:Price (Low &gt; High)</option>
									<option value="">Sort
										By:Price (High &gt; Low)</option>
									<option value="">Sort
										By:Rating (Highest)</option>
									<option value="">Sort
										By:Rating (Lowest)</option>
									<option value="">Sort
										By:Model (A - Z)</option>
									<option value="">Sort
										By:Model (Z - A)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="shop-toolbar d-none">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<a href="#" class="sorting-btn" data-target="grid-four">
									<span class="grid-four-icon">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
						<div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
							<span class="toolbar-status">
								Showing 1 to 9 of 14 (2 Pages)
							</span>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
							<div class="sorting-selection">
								<span>Show:</span>
								<select class="form-control nice-select sort-select">
									<option value="" selected="selected">3</option>
									<option value="">9</option>
									<option value="">5</option>
									<option value="">10</option>
									<option value="">12</option>
								</select>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								<span>Sort By:</span>
								<select class="form-control nice-select sort-select mr-0">
									<option value="" selected="selected">Default Sorting</option>
									<option value="">Sort
										By:Name (A - Z)</option>
									<option value="">Sort
										By:Name (Z - A)</option>
									<option value="">Sort
										By:Price (Low &gt; High)</option>
									<option value="">Sort
										By:Price (High &gt; Low)</option>
									<option value="">Sort
										By:Rating (Highest)</option>
									<option value="">Sort
										By:Rating (Lowest)</option>
									<option value="">Sort
										By:Model (A - Z)</option>
									<option value="">Sort
										By:Model (Z - A)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
					
					<?php
$query = $db->query("SELECT * FROM kitap WHERE kitap_turu LIKE '%$kid%'", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  
		
 ?>

							<div class="col-lg-4 col-sm-6">
								<div class="product-card">
									<div class="product-grid-content">
										<div class="product-header">
											<a href="" class="author"><?php echo $row['yazar']; ?></a>
											<h3 class="product-title"><?php echo $row['kitap_adi']; ?></h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
												<img src="<?php echo $row['kapak_foto']; ?>" alt="">
												<div class="hover-contents">
													 <a href="product-details.php?id=<?php echo $row['id']; ?>" class="hover-image">
														<img src="<?php echo $row['kapak_foto']; ?>" alt="">
														 <a href="" class="author">Yıl : <?php echo $row['yili']; ?></a>
													</a>
													<div class="hover-btns">

                                                                        <a href="ekle.php?id=<?php echo $row['id']; ?>" name="kaydet"  class="single-btn" >
                                                                            <i  class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.html" data-id="<?php echo $row['id']; ?>" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.html" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="product-details.php?id=<?php echo $row['id']; ?>" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
												</div>
											</div>
											<div class="price-block">
												<span class="price"><?php echo $row['fiyat']; ?>TL</span>
												<del class="price-old">£51.20</del>
												<span class="price-discount">20%</span>
											</div>
										</div>
									</div>
								
								</div>
							</div>
							
							<?php   }}  ?>
					<div class="col-lg-4 col-sm-6">
						
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							
							
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							
							
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							
							</div>
							
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							
							
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							
							
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							
							
						</div>
					</div>
				</div>
				<!-- Pagination Block -->
				<div class="row pt--30">
					<div class="col-md-12">
						<div class="pagination-block">
							<ul class="pagination-btns flex-center">
								<li><a href="" class="single-btn prev-btn ">|<i class="zmdi zmdi-chevron-left"></i> </a>
								</li>
								<li><a href="" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a>
								</li>
								<li class="active"><a href="" class="single-btn">1</a></li>
								<li><a href="" class="single-btn">2</a></li>
								<li><a href="" class="single-btn">3</a></li>
								<li><a href="" class="single-btn">4</a></li>
								<li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a>
								</li>
								<li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i>|</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
					aria-labelledby="quickModal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div class="product-details-modal">
								<div class="row">
									<div class="col-lg-5">
										<!-- Product Details Slider Big Image-->
										<div class="product-details-slider sb-slick-slider arrow-type-two"
											data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
											<div class="single-slide">
												<img src="image/products/product-details-1.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-2.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-3.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-4.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-5.jpg" alt="">
											</div>
										</div>
										<!-- Product Details Slider Nav -->
										<div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
											data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
											<div class="single-slide">
												<img src="image/products/product-details-1.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-2.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-3.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-4.jpg" alt="">
											</div>
											<div class="single-slide">
												<img src="image/products/product-details-5.jpg" alt="">
											</div>
										</div>
									</div>
									<div class="col-lg-7 mt--30 mt-lg--30">
										<div class="product-details-info pl-lg--30 ">
											<p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
											<h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
											<ul class="list-unstyled">
												<li>Ex Tax: <span class="list-value"> £60.24</span></li>
												<li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a>
												</li>
												<li>Product Code: <span class="list-value"> model1</span></li>
												<li>Reward Points: <span class="list-value"> 200</span></li>
												<li>Availability: <span class="list-value"> In Stock</span></li>
											</ul>
											<div class="price-block">
												<span class="price-new">£73.79</span>
												<del class="price-old">£91.86</del>
											</div>
											<div class="rating-widget">
												<div class="rating-block">
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star "></span>
												</div>
												<div class="review-widget">
													<a href="">(1 Reviews)</a> <span>|</span>
													<a href="">Write a review</a>
												</div>
											</div>
											<article class="product-details-article">
												<h4 class="sr-only">Product Summery</h4>
												<p>Long printed dress with thin adjustable straps. V-neckline and wiring
													under the Dust with ruffles at the bottom
													of the
													dress.</p>
											</article>
											<div class="add-to-cart-row">
												<div class="count-input-block">
													<span class="widget-label">Qty</span>
													<input type="number" class="form-control text-center" value="1">
												</div>
												<div class="add-cart-btn">
													<a href="" class="btn btn-outlined--primary"><span
															class="plus-icon">+</span>Add to Cart</a>
												</div>
											</div>
											<div class="compare-wishlist-row">
												<a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish
													List</a>
												<a href="" class="add-link"><i class="fas fa-random"></i>Add to
													Compare</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="widget-social-share">
									<span class="widget-label">Share:</span>
									<div class="modal-social-share">
										<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
										<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
										<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	
	      <!--=================================
    Footer
===================================== -->
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">alt bar</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" >
                
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
===================================== -->
   <?php include 'footer.php'; ?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>