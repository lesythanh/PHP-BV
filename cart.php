<?php
session_start();


	$product = $_SESSION['cart'];

// foreach($product as $key => $value){
// 	echo $value["title"];
// 	echo $value['image'];
// 	echo $value['price'];
// 	echo $value['quantity'];
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i><?php echo count($product) ?></a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html" class="active">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php 
						$sum = 0;
							foreach($product as $key => $value){
								$a = ($value['price'] * $value['quantity']);
								$sum += $a;
						?>
						<tr id="<?php echo $value['id'] ?>">
							<td class="cart_product">
								<a href=""><img style="height: 120px; width: 150px" src="img/<?php echo $value["image"] ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $value['title'] ?></a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p class="price" ><?php echo $value['price']?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['quantity']  ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $a ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php 
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span class="totalall"><?php echo $sum ?></span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<!-- <script>
		let shops = localStorage.getItem('shop');
    if(shops){
        shops =  JSON.parse(shops);
    }
    var html = '';


	// 
	// let a = [1,2,4,5,6];
	// let sum = 0;
	// a.map(function(value){
	// 	sum += value;
	// });
	// console.log(sum)

	
	var sum = 0;
    Object.keys(shops).map((key,value)=>{
		var remove = shops[key].price
		var price = Number(remove.replace('$',''));
		var quantity = Number(shops[key].qty)
		var tongAll =  price * quantity;
		sum += tongAll;
        html += "<tr id = "+ key +" >" +
                        "<td class='cart_product'>" + "<a href=''><img src='"+ shops[key]['img'] +"' alt=''>" + "</a>" +"</td>" +
						"<td class='cart_description'>" + "<h4>" + "<a href=''>" + "Colorblock Scuba" +
						"</a>" + "</h4>" + "<p>" + "Web ID: 1089772" + "</p>" + "</td>"+
						"<td class='cart_price'>" + "<p class=price>"+shops[key]['price'] + "</p>" + "</td>" +
						"<td class='cart_quantity'>" + "<div class='cart_quantity_button'>" +
						"<a class='cart_quantity_up' >" + "+" + "</a>" +
						"<input class='cart_quantity_input' type='text' name='quantity' value='"+ shops[key].qty +"' autocomplete='off' size='2'>"+
						"<a class='cart_quantity_down' >" + "-" + "</a>" + "</div>" + "</td>" +
						"<td class='cart_total'>" + "<p class='cart_total_price' href=''>" +tongAll+ "</td>" +  
						"<td class='cart_delete'>" + "<a class='cart_quantity_delete' href='#'>" + 
						"<i class='fa fa-times'>" + "</i>" + "</a>" + "<td>"
                    "</tr>";
		
    }) 
	getTotalAll = $('span.totalall').text(sum)

    $("table tbody").append(html);
		var tong = 0
		var total = 0	
		$('a.cart_quantity_up').click(function(){
			var getValue = Number($(this).closest('.cart_quantity_button').find('input').val());
			var getPrice = $(this).closest('tr').find('p.price').text()
			var getId = $(this).closest('tr').attr('id');
			getPrice = Number(getPrice.replace('$',''))
			tong = getValue + 1
			sum = sum + getPrice
			getTotalAll = $('span.totalall').text(sum)

			$(this).closest('.cart_quantity_button').find('input').val(tong)
			total = getPrice * tong
			var getPrice = $(this).closest('tr').find('p.cart_total_price').text(total)
			if(shops[getId]){
				shops[getId].qty = tong
				localStorage.setItem('shop',JSON.stringify(shops))
			}

		})

		$('a.cart_quantity_down').click(function(){
			var getValue = Number($(this).closest('.cart_quantity_button').find('input').val());
			var getPrice = $(this).closest('tr').find('p.price').text()
			var getId = $(this).closest('tr').attr('id');
			getPrice = Number(getPrice.replace('$',''))
			tong = getValue - 1
			sum = sum - getPrice
			getTotalAll = $('span.totalall').text(sum)
			$(this).closest('.cart_quantity_button').find('input').val(tong)
			total = getPrice * tong
			var getPrice = $(this).closest('tr').find('p.cart_total_price').text(total)
			if(shops[getId]){
				shops[getId].qty = tong
				localStorage.setItem('shop',JSON.stringify(shops))
			}

			if(shops[getId].qty < 1){
				delete shops[getId]
				localStorage.setItem('shop',JSON.stringify(shops))
				$(this).closest("tr").remove();
			}

		})
		$('a.cart_quantity_delete').click(function(){
			var getDelete = $(this).closest('tr').attr('id');
			if(getDelete){
				sum -= total
				delete shops[getDelete]
				localStorage.setItem('shop',JSON.stringify(shops))
				$(this).closest("tr").remove()
			}
		})
	</script> -->

	<script>
		var tong = 0
		var total = 0

		$('.cart_quantity_up').click(function(){
			var getValue = Number($(this).closest('.cart_quantity_button').find('input').val());
			var getPrice = Number($(this).closest('tr').find('p.price').text());
			var getId = $(this).closest('tr').attr('id');
			var sum = Number($('span.totalall').text())
			tong = getValue + 1
			sum = sum + getPrice
			var getTotalAll = $('span.totalall').text(sum)
			$(this).closest('.cart_quantity_button').find('input').val(tong)
			total = getPrice * tong
			var getPrice = $(this).closest('tr').find('p.cart_total_price').text(total)
			$('form').serialize();

			$.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "up-down.php",// gọi đến file server show_data.php để xử lý
				data: {
					id: getId,
					value: tong
				}, //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){
					//kết quả trả về từ server nếu gửi thành công
					console.log(123);
				}
			});
		})
////hàm down
		$('.cart_quantity_down').click(function(){
			var getValue = Number($(this).closest('.cart_quantity_button').find('input').val());
			var getPrice = Number($(this).closest('tr').find('p.price').text());
			var getId = $(this).closest('tr').attr('id');
			var sum = Number($('span.totalall').text())

			tong = getValue - 1
			sum = sum - getPrice
			var getTotalAll = $('span.totalall').text(sum)
			$(this).closest('.cart_quantity_button').find('input').val(tong)
			total = getPrice * tong
			var getPrice = $(this).closest('tr').find('p.cart_total_price').text(total)

			if(total == 0){
				$(this).closest("tr").remove();
			}
			$('form').serialize();

			$.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "up-down.php",// gọi đến file server show_data.php để xử lý
				data: {
					id: getId,
					value: tong
				}, //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){
					//kết quả trả về từ server nếu gửi thành công
					console.log(123);
				}
			});
		})
// delete
		$('a.cart_quantity_delete').click(function(){
			// var getDelete = $(this).closest('tr').attr('id');
			var getId = $(this).closest('tr').attr('id');
			var sum = Number($('span.totalall').text())
			var total = $(this).closest('tr').find("p.cart_total_price").text();

			var quantity = Number($(this).closest("tr").find(".cart_quantity_input").val())
			var cart = $('.fa-shopping-cart').text();
			console.log(cart);
	
				sum = sum - total
				var getTotalAll = $('span.totalall').text(sum)	
				$(this).closest("tr").remove();


			$('form').serialize();
			$.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "ajaxDelete.php",// gọi đến file server show_data.php để xử lý
				data: {
					id: getId
				}, //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){
					//kết quả trả về từ server nếu gửi thành công
					console.log(123);
				}
			});
		})
	</script>
</body>
</html>