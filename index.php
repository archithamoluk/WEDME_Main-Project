<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"33ee29684dbe3baf5fbe5206f1b7a1833","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
<title>WEDME</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript">
 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>	

	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>	
<link rel="stylesheet" href="css/intlTelInput.css">
</head>
<body>
<header>
<?php $n="active"; ?>
<?php include"nav.php";?>

</header>
<?php
if(isset($_SESSION['login']))
{
	?>
	
	<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Featured Profiles</h2>
							<ul id="flexiselDemo3">
								<li>
								<?php
								$ret=select("select * from tbl_users where id!='".$_SESSION['id']."' order by id desc limit 0,8");
								while($t=mysqli_fetch_array($ret))
								{extract($t);
							
							
								?>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php?id=<?=$id?>">
											<div class="profile-image">
												<img src="images/<?=$img?>" style="height:320px" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458wedme<?=$id?></h4>
													<ul>
														<li><span>Age / Height</span>: <?=$age?>/ <?=$height?></li>
														<li><span>Caste</span>: <?=$cast?></li>
														<li><span>Religion</span>: <?=$religion?></li>
														<li><span>Profession</span>: <?=$profession?></li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<?php
								}
									?>
									
									
									
									
									
									
									
								</li>
								
							</ul>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
	
	
	<?php
}
else
{
	?>
	<div class="w3layouts-banner" id="home">
<div class="container">
	<div class="logo">
		<h1><a class="cd-logo link link--takiri" href="index.php"></a></h1>
	</div>
	<div class="clearfix"></div>
	<div class="agileits-register">
		<h3>SIGN UP NOW!</h3>
		
		<form action="myphp.php" method="post" enctype="multipart/form-data"> 
				
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" name="name" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Gender:</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio" name="gender" value="male"><i></i>Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="gender" value="female"><i></i>Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Age:</span>
					<input type="text" name="age" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
					<input class="date" id="datepicker" name="dob" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Upload Photo</span>
					&nbsp;<input class="date"  name="myimage" type="file"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Height:</span>
					<input type="text" name="height" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Religion:</span>
					<select id="w3_country1" name="religion" onchange="change_country(this.value)" class="frm-field required"> 
						<option value="Hindu">Hindu</option>    
						</select>
				</div>
				</br>
				<div class="w3_modal_body_grid">
					<span>Caste </span>
					<select id="w3_country" name="cast" onchange="change_country(this.value)" class="frm-field required">
					<?php
					$r=select("select * from tbl_caste");
					while($re=mysqli_fetch_array($r))
					{extract($re);
					?>
						<option value="<?=$caste_name?>"><?=ucwords($caste_name)?></option>
							
<?php
					}
?>						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>Mobile No:</span>
				<!-- country codes (ISO 3166) and Dial codes. -->
					<input id="phone" name="mobile" type="tel">
				  <!-- Load jQuery from CDN so can run demo immediately -->
				  <script src="js/intlTelInput.js"></script>
				  <script>
					$("#phone").intlTelInput({
					
					  utilsScript: "js/utils.js"
					});
				  </script>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" name="email" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password:</span>
					<input type="password" name="password" placeholder=" " required=""/>
				</div>
				
				<input type="submit" name="register" value="Register me" />
				<div class="clearfix"></div>
				<p class="w3ls-login">Already a member? <a href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a></p>
			</form>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- Modal -->
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				  <div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
						<h4 class="modal-title">Login to Continue</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
							<form  action="myphp.php" method="post">
								<label>User Name </label>
								<input type="text" name="email" placeholder="Email" required="">
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" required="">	
								<div class="w3ls-loginr"> 
									
								</div>
								<div class="clearfix"> </div>
								<input type="submit" name="login" value="Login">
								<div class="clearfix"> </div>
								
							</form>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<!-- //Modal -->
	</div>
</div>

	<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles"><br><br><br>
					<h2>Featured Profiles</h2>
							<ul id="flexiselDemo3">
								<li>
								<?php
								$ret=select("select * from tbl_users  order by id desc limit 0,8");
								while($t=mysqli_fetch_array($ret))
								{extract($t);
								?>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php?id=<?=$id?>">
											<div class="profile-image">
												<img src="images/<?=$img?>" style="height:320px" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458wedme<?=$id?></h4>
													<ul>
													<li><span>Profile Created By</span>: Self</li>
														<li><span>Age</span>: <?=$age?></li>
														<li><span>Caste</span>: <?=$cast?></li>
														<li><span>Religion</span>: <?=$religion?></li>
														<li><span>Profession</span>: <?=$profession?></li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<?php
								}
									?>
									
									
									
									
									
									
									
								</li>
								
							</ul>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
	<?php
}
?>		
			
			<script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->	
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: false,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
			
	
	
	
	<div class="w3layous-story text-center">
		<div class="container">
			<h4>W E D M E</h4>
		</div>
	</div>
	<!-- //Get started -->
	
<!-- footer -->
<footer>
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	n 
</footer>
<!-- //footer -->	
<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>
	<!-- //for smooth scrolling -->

</body>
<!-- //body -->
</html>
<!-- //html -->
