<?php
	require('connect2.php');
	include('head.php');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
  .coming-soon {
    font-size: smaller; /* Make the text smaller */
    position: relative;
    top: -5px; /* Adjust vertical position */
  }
</style>

<body onload="closeLoader();" onscroll="cookiesFu(0)">
<!--------header ------------------>
	<div class="mobile_header">
		<img src="images/logo.png" loading="lazy">
			<div class="mobile_home_btn" >
				<span onclick="openMenu()" >
					<div class="mhline1"></div>
					
					<div class="mhline2"></div>
					<div class="mhline3"></div>
				</span>
			</div>
	</div>

	<div class="header" id="header">
		<div class="head_cont">
			<div class="head_logo"><img src="images/logo2.png" loading="lazy"></div>
		</div>
		<div class="head_cont">
			<div class="search_bar"><input type="search" id="search_val"  placeholder="Search..." autocomplete="off" onchange="searchMe()"><button class="fa fa-search" id="search_me" onclick="searchMe()"></button></div>
				<!--------search resulkt------->
					<div class="search_result" id="se_result"></div>


				<!--------search resulkt------->
				<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PL7NZ3WG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

			
		</div>
		<div class="head_cont">
			<a href="index.php"><div class="head_text"><i class="fa fa-home"></i> <h3>Home</h3></div></a>
			<div class="head_text " id="toggle_btn"><h3><i class="fas fa-angle-down"></i>  Products </h3>
				<div class="drop_down">
					
					<a href="postermaker/index.php"><li>Digital Card</li></a>
					<a href="postermaker/index.php"><li>Poster Maker</li></a>
						<a href="/whats.php"><li>Whatsapp Marketing</li></a>
							<a href="https://webmaker.desicard.in/"><li>Website Maker</li></a>
					

						
						
					
				</div>
			</div>
			<a href="index.php#contact"><div class="head_text"><i class="fas fa-phone"></i> <h3>Contact</h3></div></a>
			
			
			
			<div class="head_text login_btn" id="toggle_btn2"><h3><i class="fas fa-user "></i>  Login/Register </h3>
				<div class="drop_down">
    				<a href="panel/login/login.php"><li>Customer Login</li></a>
				<a href="panel/franchisee-login/login.php"><li>Franchise Login</li></a>
				</div>
			</div>
			
			<div class="head_text" style="    "><?php  require("g_translate.php");?></div>
			
			
			<div class="head_text" onclick="changeCity()" title="Click To Change" style="display:none;"> <h3> <i class="editable fas fa-map-marker "></i> <?php if(isset($city)){echo $city;}else {echo 'Select';} ?></h3> </div>
		</div>
		
		<div class="outside_click_close" onclick="closeMenu()"></div>
	</div>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16637940093"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16637940093');
</script>

<script>


	
	$("#toggle_btn,#toggle_btn2").on('click',function(){
		  $(this).children('.drop_down').toggle();
		  
		  //console.log(this);
	});
	
	
function searchMe(){
	var search=$('#search_val').val();
	$('#se_result').show().html('<div class="alert_info"><i class="fa fa-refresh fa-spin"></i> Searching...</div>');
		$.ajax({
			url:'search.php',
			method:'POST',
			data:{search:search},
			dataType:'text',
			success:function(data){
				$('#se_result').html(data);
				
				}
			});
											
}

function closeSearch(){
	$('#se_result').hide();
}


	function openMenu() {
		$(".header").css({"left": "0px"});
		$(".outside_click_close").css({"display": "block"});
		
		$(".mobile_home_btn").html('<span onclick="closeMenu()" class="cross_menu_line">	<div class="mhline1"></div><div class="mhline2"></div></span>');
	}
	
	function closeMenu() {
		$(".header").css({"left": "-600px"});
		$(".outside_click_close").css({"display": "none"});
		$(".mobile_home_btn").html('<span onclick="openMenu()" >	<div class="mhline1"></div><div class="mhline2"></div><div class="mhline3"></div></span>');
	}


</script>

<script>
	function changeCity(){
		$(".city_change").slideToggle();
	}
</script>
<div class="city_change"><h3 onclick="changeCity()">&times;</h3>
		<form action="" method="POST">
		<?php 
				echo '<select name="city">';
				if(isset($city)){
				echo '<option>'.$city.'</option>';}else {echo '<option value="">-Select-</option>';}
				
				
					require('panel/city.php');
				echo '</select>';
			
			?>
			<input type="submit" name="change_city" value="Change">
		</form>
	</div>

<!-------------header ends--------------------->

<div class="wtsp_chat">
	<a href="https://api.whatsapp.com/send?phone=919765834383&text=I%20am%20Interested%20For%20Advance%20Digital%20Card.%20Please%20Share%20Me%20Demo&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp"></i></a>
</div>
<!-------------hero --------------------->


	<div class="hero">
	
	<!----------bubbles-----
		
			<div class="bubbles_hero">
				<div class="bubble1"></div>
				<div class="bubble2"></div>
				<div class="bubble3"></div>
				<div class="bubble4"></div>
				<div class="bubble5"></div>
				<div class="bubble1"></div>
				<div class="bubble2"></div>
				<div class="bubble3"></div>
				<div class="bubble4"></div>
				<div class="bubble5"></div>
				
			</div>
		<!----------bubbles ends------------------>
		
		<div class="hero_text2">
			<div class="ht_side1">
			<h1>A.I Based Websites – No Coding Needed Register Now Free</h1>
			<h4>Affordable MARKETING for Your Brand</h4>
			<a href="panel/login/login.php">	<div class="btn1" style="background: #1284df;">Start You Trial Now <i class="fas fa-angle-right"></i></div></a>
			
			
			<br><a href="#card-demo"><div class="btn1">See Demo <i class="fas fa-angle-down"></i></div></a>
			<a href="#business"><div class="btn1">Start Your Business <i class="fas fa-angle-down"></i></div></a>
				<a href="https://api.whatsapp.com/send?phone=919765834383&text=I%20am%20Interested%20For%20Advance%20Digital%20Card.%20Please%20Share%20Me%20Demo&source=&data=&app_absent=">	<div class="btn1" style="background: #008000;">ReadyMade Website E-Commarce Rs.999/- Only</div></a><div class="btn1" style="background: #DAA520;"><a href="https://anchoractsrushti.com/" target="_blank">Demo ClickM</a>Get your Customized Website @2500/- Only</div></a><div class="btn1" style="background: #1284df;">Auto TEXT SMS After Missed,Outgoing,Incomming calls Rs.999/- Only</div></a><div class="btn1" style="background: #FF0000;"><a href="https://kart.galaxytribes.in/" target="_blank">Demo ClickM</a>Instant Customizable Website for all Business Rs.1500/-</div></a><div class="btn1" style="background: #3B82F6;"><a href="https://parcel.galaxytribes.in" target="_blank">Demo ClickM</a>
</a>A.I BASED COURIER/LOGISTIC MANAGEMENT WEBSITE+APP  RS. 5500/-ONLY LIFETIME </a></div></a>
			</div>
			
			<div class="ht_side2">
			<img src="images/model55.png" loading="lazy">
			</div>
		</div>
		
		
		
		
		
		<div class="visitors_box">
			<div class="v_box">
			<span class="visitors" ><?php 
				$queryct=mysqli_query($connect,'SELECT *  FROM visitors '); 
				 $value=number_format(mysqli_num_rows($queryct),0,'','');
					
				if(1000 > $value ){
					echo  $value.'+';
				}elseif(1000000 > $value && 1000 < $value){
					echo number_format($value/1000,0).'K';
				}elseif( 1000000000 > $value && 1000000 < $value){
					echo number_format($value/1000000,0).'M';
				}elseif(1000000000000 > $value && 1000000000 < $value){
					echo number_format($value/1000000000,0).'B';
				}
				
				?>
				</span>
				<h3>Visitors</h3>
				
			</div>

			
		<div class="v_box">
			<span class="cards"><?php 
				$queryct=mysqli_query($connect,'SELECT *  FROM customer_login '); 
				 echo '1K+';
				
				
				
				?></span>
				<h3>Projects</h3>
				
			</div>

		</div>
		
		
		
	</div>

	
<!-------------hero ends--------------------->



	
<!-------------Category Slider--------------------->

  








<!-------------Category Slider ends--------------------->


<div class="social_med_poster">

	 <h2>POSTER MAKER</h2>
	<div class="containerimg">

	<?php 
		
		
		for($x=5;$x>0;$x--){
			
			echo '<div class="poster_img" >';
			echo '<a href="postermaker/index.php"><img src="postermaker/frames/f'.$x.'.png"  alt="Gallery Image" ></a>';
			echo '</div>';
			
		}
		
		?>
		</div>
		
		<h2>Daily Social Media Image</h2>
	
	<div class="containerimg">

	<?php 
		
		
		for($x=5;$x>0;$x--){
			
			echo '<div class="poster_img" >';
			echo '<a href="postermaker/index.php"><img src="images/f'.$x.'.png"  alt="Gallery Image" ></a>';
			echo '</div>';
			
		}
		
		?>
		</div>
		
	
		 <h2>Images with your Offer/Product</h2>
		<div class="containerimg"> 
		 
		 <?php 
		
		for($x=9;$x>5;$x--){
			
			echo '<div class="poster_img" >';
			echo '<a href="postermaker/index.php"><img src="postermaker/frames/f'.$x.'.png"  alt="Gallery Image" ></a>';
			echo '</div>';
			
		}
			
		?>
		



</div>
	
	
	

</div>







<div class="row row_backimg">

	<h1><span class="bc_bg">Ho</span>w It Works?</h1>
	
	<div class="flex_box">
		<div class="flex_boxin">
		<i class="fa fa-edit"></i>
		<h1>1. Create your Card</h1>
		<p>Design your digital visiting card cum Mini Website in 2 minutes</p>
		
		</div>
		<div class="flex_boxin">
		<i class="fa fa-download"></i>
		<h1>2. Save to your Device</h1>
		<p>Digital Visiting Card is accessible anytime from anywhere</p>
		
		</div>
		<div class="flex_boxin">
		<i class="fa fa-share-alt"></i>
		<h1>3. Share with friends and colleagues</h1>
		<p>through a variety of channels</p>
		
		</div>
	</div>
	
	
</div>


<div class="row2" id="business">

		
	<div class="flex_pricing">
	
				<div class="flex_pricingin" >
						<h3>GOLD RESELLER MINI WEBSITE </h3>
						<h1>Start Business with us</h1>
						
						
						
						<ul>
							
					
		<h3 style="display:center"> <del>₹9,999/-</del> FREE </h3>
		<li>Get Digital posters for Adz</li>
		<li>Digital Platform Promotions</li>
		<li>No Deposit </li>
		<li>Business Training will be provide</li>
		<li>Additional products Fix margin</li>
		<li>Weekly Advertisement Activity </li>
		<li>No Office space Required </li>
		<li>Digital Work</li>
		
	

							<!--li class="del_item"><i class="fa fa-check"></i> Custom Domain Name <div class="title_alert">?<div class="title_alert_box">Domain charges would be extra or if you already have a domain you can use that.</div></div></li--->
						</ul>
						<a href="/panel/franchisee-login/login.php"><div class="btn_1"> JOIN WITH US <i class="fa fa-caret-right"></i></div></a>
			</div>
			
			
			
				<div class="flex_pricingin" >
						<h3>ELITE PARTNER MINI WEB SITE </span></h3>
						<h1>Start Business with us</h1>
						
						
						
						<ul>
							
					
		<h3 style="display:center"> <del>₹19,999/-</del> ₹4,999/-</h3>
		<li>Get Digital posters for Adz</li>
		<li>Digital Platform Promotions</li>
		<li>Deposit deduct as per Elite plan </li>
		<li>Business plan Meet Weekly</li>
		<li>Daily/Weekly Settlement</li>
		<li>Additional Products High margin </li>
		<li>Website leads will be forward</li>
		<li>Daily Advertisement activity</li>
		<li>Separate Admin Panel</li>
		<li>Unlimited Data for B2b Calling</li>
		<li>No Office space Required</li>
		<li>No Refund Policy</li>
	

							<!--li class="del_item"><i class="fa fa-check"></i> Custom Domain Name <div class="title_alert">?<div class="title_alert_box">Domain charges would be extra or if you already have a domain you can use that.</div></div></li--->
						</ul>
						<a href="/panel/franchisee-login/login.php"><div class="btn_1"> JOIN WITH US <i class="fa fa-caret-right"></i></div></a>
			</div>
			
			
			
			
			
			
		
			<div class="flex_pricingin">
						<h3 style="background: #ffa422;">Digital Card Website with Ecommerce (Premium)</h3>
						<h1><?php
			$querya=mysqli_query($connect,'SELECT * FROM admin_login');
			if(mysqli_num_rows($querya)>>0){
			$rowa=mysqli_fetch_array($querya);
				if(!empty($rowa['card_amount'])){
					echo '<del>₹ '.$rowa['card_amount_mrp'].'</del> Now @ just ₹'.$rowa['card_amount'];
				}else {echo '<del>₹ 0000</del> ₹ 000';}
			}
			?> / 1 Year<p> </p></h1>
						
						
						
						<ul>
							<li ><i class="fa fa-check"></i> Subdomain URL feature <div class="new_lab2">New Feature</div><div class="title_alert">?<div class="title_alert_box">To give your URL a better business look. we are offering this feature.</div></div></li>
							<li ><i class="fa fa-check"></i> NFC Smart Card  <br>(Company LOGO & BARCODE)  <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Custom NFC Smart Card  <br>(Rs. 199 Extra with Delivery)  <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Download Card as PDF (Offline Card)<div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Show Location on Map <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> Unlimited Theme <br>(Upload Custom Background Theme Image)  <div class="new_lab2">New Feature</div></li>
							<li ><i class="fa fa-check"></i> 40 Premium themes</li>
							<li ><i class="fa fa-check"></i> Share cards with anyone, Unlimited times</li>
							<li class=""><i class="fa fa-check"></i> One Click Save Button</li>
							<li ><i class="fa fa-check"></i> Upload 2 PDF Documents</li>
							<li ><i class="fa fa-check"></i> Update card Unlimited times.</li>
							<li  ><i class="fa fa-check"></i> Feedback option available.</li>
							<li ><i class="fa fa-check"></i>Manage Feedbacks </li>
							
							<li  ><i class="fa fa-check"></i>199 Products in E-commerce Store</li>
							<li ><i class="fa fa-check"></i>E-commerce Order Manager </li>
							<li ><i class="fa fa-check"></i> Profile Photo</li>
							<li><i class="fa fa-check"></i> Select design from available templates</li>
							<li ><i class="fa fa-check"></i> 99 Products or Services</li>
							<li><i class="fa fa-check"></i> 30 Photos in Gallery</li>
							<li > <i class="fa fa-check"></i> Social Media Links</li>
							<li > <i class="fa fa-check"></i> 10 Videos in Youtube Video Gallery</li>
							<li><i class="fa fa-check"></i> Payment Section</li>
							<li  ><i class="fa fa-check"></i> Contact Form Included</li>
							
							<li  ><i class="fa fa-check"></i> Change language</li>
						</ul>
						<a href="panel/login/login.php"><div class="btn_1">Create Now Online <i class="fa fa-caret-right"></i></div></a>
			</div>
		
		
	</div>
	
	
</div>


<h1 class="title_sample" id="card-demo"><span class="bc_bg">D</span>emo Business Card/Mini Website </h1>
<p class="sub_title">Click on image to see demo</p>
<div class="temp_preview">

	
	<div class="demo_slider">
			
	
		<div class="card_tag">Premium</div>
		<div class="expander">
			<div class="expander_slide">
			
			<?php 
		for($x=36;$x<=40;$x++){ ?>
		<div class="temp_pre" id="tmp1"><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a>
			
		</div>
		
		<?php } ?>
			<?php
		for($x=31;$x<=35;$x++){ ?>
		<div class="temp_pre" id="tmp1"><div class="new_lab">New</div><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
		
		<?php } ?>
			
		</div>
		</div>
		<div class="card_tag">Classic</div>
		<div class="expander">
		<div class="expander_slide">
			
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=2" target="_blank"><img src="panel/images/template1.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=3" target="_blank"><img src="panel/images/template2.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
		
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=4" target="_blank"><img src="panel/images/template3.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=1" target="_blank"><img src="panel/images/template.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=5" target="_blank"><img src="panel/images/template4.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=6" target="_blank"><img src="panel/images/template5.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=7" target="_blank"><img src="panel/images/template7.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=8" target="_blank"><img src="panel/images/template8.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=9" target="_blank"><img src="panel/images/template9.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<div class="temp_pre"><a href="n.php?n=demo-card&demo=10" target="_blank"><img src="panel/images/template10.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			<?php
		for($x=26;$x<=30;$x++){ ?>
		<div class="temp_pre" id="tmp1"><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
		
		<?php } ?>
			
			</div>
			</div>
			<div class="card_tag">Customer's Customize</div>
		<div class="expander">
		<div class="expander_slide">
		<?php 
		for($x=11;$x<=25;$x++){ ?>
			<div class="temp_pre" ><a href="n.php?n=demo-card&demo=<?php echo $x; ?>" target="_blank"><img src="panel/images/template<?php echo $x; ?>.png" loading="lazy"><div class="slide_popup_btn">See Demo</div></a></div>
			
			
		<?php }?>
		</div>	
		</div>	
	</div>
	

</div>




<!---------------beneficial for-------------------------->

<div class="row33">
	<h1><span class="bc_bg">D</span>igital Card is Beneficial for</h1>
	<p>If you meet your prospective customers in person (one to one meeting) or atleast you do telephonic conversations to market and sell your products or services, then our Digital Business Card will help convey your message in a more strategic way.</p>
	
	
	
	<div class="benefit_box">
		<i class="fa fa-briefcase"></i>
		<h3>Business Owners</h3>
		<p>Business owners who call and/or meet prospects personally to get business.</p>
	</div>
	
	<div class="benefit_box">
		<i class="fa fa-handshake-o"></i>
		<h3>Sales Professionals</h3>
		<p>Independent Sales Professionals, Field Staff and Sales Executives.</p>
	</div>
	
	<div class="benefit_box">
		<i class="fas fa-chart-bar"></i>
		<h3>Software & IT</h3>
		<p>Web Designers, Digital and Social Media Marketers who call / meet business people.</p>
	</div>

	<div class="benefit_box">
		<i class="fa fa-bullhorn"></i>
		<h3>Marketing Agencies</h3>
		<p>Advertising, Branding, News Paper, Printing and Media Planning Houses.</p>
	</div>
	
	<div class="benefit_box">
		<i class="fas fa-business-time"></i>
		<h3>Consultants</h3>
		<p>Architect, Interior Designers, CA, Finance and other Consultants.</p>
	</div>

	<div class="benefit_box">
		<i class="fa fa-plane"></i>
		<h3>Events and Travels</h3>
		<p>Professionals from Event Management, Tours and Travel Companies.</p>
	</div>
	<div class="benefit_box">
		<i class="fa fa-bar-chart"></i>
		<h3>Finance & Realtors</h3>
		<p>People from Real Estate Brokers and Insurance Advisors.</p>
	</div>	
	<div class="benefit_box">
		<i class="fa fa-graduation-cap"></i>
		<h3>Education & Training</h3>
		<p>Corporate Trainers, Educational Workshops, HR Consultants and Teachers.</p>
	</div>
	<div class="benefit_box">
		<i class="fa fa-heartbeat"></i>
		<h3>Health and Beauty</h3>
		<p>Gym, Beautician, Salon, Dietician, Image Consultants Yoga & Dance Professionals.</p>
	</div>

</div>

<!---------------beneficial for--------------------->
<div class="row_features">
<h1><span class="bc_bg">FE</span>ATURES</h1>
	<p>One business card, endless possibilities</p>
	
	<div class="cont_share_boxes"><i class="fa fa-link"></i>Subdomain Link</div>
	<div class="cont_share_boxes"><i class="fa fa-language"></i> Multiple Language</div>
	<div class="cont_share_boxes"><i class="fa fa-file"></i> PDF vCard</div>
	<div class="cont_share_boxes"><i class="fa fa-phone"></i> One Click Call</div>
	<div class="cont_share_boxes"><i class="fa fa-download"></i> One Click Save</div>
	<div class="cont_share_boxes"><i class="fa fa-file"></i> Upload 2 PDF Documents</div>
	<div class="cont_share_boxes"><i class="fab fa-whatsapp"></i> One Click WhatsApp</div>
	<div class="cont_share_boxes"><i class="fa fa-envelope"></i> One Click Email</div>
	<div class="cont_share_boxes"><i class="fa fa-star"></i> Get Customers Feedback</div>
	<div class="cont_share_boxes"><i class="fas fa-directions"></i> One Click Navigate</div>
	<div class="cont_share_boxes"><i class="fas fa-address-book"></i> Add to Contacts</div>
	<div class="cont_share_boxes"><i class="fab fa-facebook"></i> Website & Social Links</div>
	<div class="cont_share_boxes"><i class="fa fa-share-alt"></i> Share Unlimited</div>
	<div class="cont_share_boxes"><i class="fa fa-bank"></i> Online Store</div>
	<div class="cont_share_boxes"><i class="fa fa-edit"></i> Easy To Update</div>
	<div class="cont_share_boxes"><i class="fa fa-image"></i> Photo Gallery</div>
	<div class="cont_share_boxes"><i class="fab fa-youtube"></i> Youtube Video Gallery</div>
	<div class="cont_share_boxes"><i class="fa fa-rupee"></i> Payment Section</div>
	<div class="cont_share_boxes"><i class="fa fa-comment"></i> Enquiry Form</div>

		

</div>



<div class="row_bottom display_flex" id="contact">

	<div class="side1">
		
		<h1>GalaxyTribes™Digital</h1>
		

		
		<div class="row_bt_p"><i class="fas fa-phone"></i> <h4>+91 9765834383</h4></div>
		<div class="row_bt_p"><i class="fa fa-envelope"></i><h4>support@galaxytribes.in</h4></div>
		<div class="row_bt_p"><i class="fa fa-map-marker"></i><h4>323 Vraj Life Space Mhasrul Nashik Maharashtra India</h4></div>
		
		
		
	
	
	<div class="row_bt_p">
		<h4>Visitors : <?php 
				$queryct=mysqli_query($connect,'SELECT *  FROM visitors '); 
				 echo $value=number_format(mysqli_num_rows($queryct),0,'',','); ?></h4>
	</div>
		<!----div class="row_bt_p"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.892617311576!2d77.32671141455825!3d28.572987093525363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce44c5a9608bb%3A0x87f6e3ce3cf75873!2sPocket%20F%2C%20Sector%2027%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1600425643522!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div----->
		
	</div>
	<div class="side2">
	<form action="https://api.whatsapp.com/send?" target="_blank">
			<input type="" name="phone" placeholder="Enter your name" value="919765834383" hidden required>
			
				<textarea name="text" placeholder="Enter your query" required></textarea>
			<input type="submit" value="Send" >
		
		
		</form>
		
		


	</div>
	
</div>


<?php if(isset($_SESSION["ip_cookie"])){  echo '<style> .cookies_policy {display:none;}</style>'; }?>
<div class="cookies_policy">
	<div class="close_cookies" onclick="cookiesFu()">&times;</div>
	<h3>This website uses cookies </h3>
	<p>
		this website uses cookies to improve your experience. by using our website to consent to all cookies in accordance with our cookies policy. <a href="tnc.php">Read More</a>
	</p>
	<center>
	
	<div class="accept_btn" onclick="cookiesFu()">Accept</div>
	<div class="close_btn" onclick="cookiesFu()">Close</div>
	
	</center>
</div>



<script>
							
							
							
							// if approved snglobalservices.com
								function cookiesFu(n){
										$('.cookies_policy').html("<center><h1 style='color: #8a8a8b; font-size: 20px;'>Thank You!</h1></center>").hide(2000);
									
										
									}
								
									
									
							</script>
							
							<?php
								$_SESSION["ip_cookie"]=$_SERVER['REMOTE_ADDR'];
							?>

<footer class="">


<p><a href="tnc.php">Terms & Conditions | Privacy Policy </a>|| 2020-<?php echo date('Y'); ?>  ||  <?php echo $_SERVER['HTTP_HOST']; ?> </p>


</footer>




</body>
</html>