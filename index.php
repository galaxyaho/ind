<?php
	require('connect2.php');
	include('head.php');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
  .coming-soon {
    font-size: smaller;
    position: relative;
    top: -5px;
  }

  /* Modern Dark + Light Theme */
  :root {
    --primary-dark: #1a1a2e;
    --secondary-dark: #16213e;
    --accent-blue: #0f3460;
    --light-bg: #f8fafc;
    --white: #ffffff;
    --text-light: #e2e8f0;
    --text-dark: #2d3748;
    --accent-color: #3b82f6;
    --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --shadow-heavy: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  * {
    transition: all 0.3s ease;
  }

  body {
    background: var(--light-bg);
    color: var(--text-dark);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.6;
  }

  /* Header Styles */
  .header {
    background: rgba(26, 26, 46, 0.98);
    backdrop-filter: blur(10px);
    box-shadow: var(--shadow-medium);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    height: auto;
    min-height: 70px;
    padding: 10px 0;
  }

  .head_cont {
    display: flex;
    align-items: center;
    height: 100%;
    padding: 5px 10px;
  }

  .head_logo img {
    max-height: 50px;
    width: auto;
  }

  .search_bar {
    flex: 1;
    max-width: 400px;
    margin: 0 20px;
  }

  .search_bar input {
    width: 100%;
    padding: 10px 15px;
    border-radius: 25px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    background: rgba(255, 255, 255, 0.1);
    color: white;
    font-size: 14px;
  }

  .search_bar input::placeholder {
    color: rgba(255, 255, 255, 0.7);
  }

  .search_bar button {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: white;
    cursor: pointer;
  }

  .header .head_text h3 {
    color: var(--text-light);
    font-weight: 500;
    font-size: 14px;
    margin: 0;
    white-space: nowrap;
  }

  .header .head_text:hover {
    transform: translateY(-2px);
    color: var(--accent-color);
  }

  .head_text {
    padding: 8px 12px;
    margin: 0 5px;
    border-radius: 5px;
    transition: all 0.3s ease;
    position: relative;
  }

  .head_text:hover {
    background: rgba(255, 255, 255, 0.1);
  }

  .mobile_header {
    background: var(--primary-dark);
    box-shadow: var(--shadow-medium);
  }
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1001;
    height: 60px;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
  }

  .mobile_header img {
    height: 40px;
    width: auto;
  }

  /* Dropdown Menus */
  .drop_down {
    position: absolute;
    top: 100%;
    left: 0;
    background: var(--primary-dark);
    min-width: 200px;
    border-radius: 8px;
    box-shadow: var(--shadow-heavy);
    display: none;
    z-index: 1002;
    border: 1px solid rgba(255, 255, 255, 0.1);
  }

  .drop_down li {
    list-style: none;
    padding: 12px 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
  }

  .drop_down li:hover {
    background: rgba(255, 255, 255, 0.1);
  }

  .drop_down li:last-child {
    border-bottom: none;
  }

  .drop_down a {
    color: var(--text-light);
    text-decoration: none;
    display: block;
  }

  /* Hero Section */
  .hero {
    background: linear-gradient(135deg, var(--primary-dark) 0%, var(--secondary-dark) 50%, var(--accent-blue) 100%);
    color: var(--text-light);
    position: relative;
    overflow: hidden;
    min-height: 100vh;
    display: flex;
    align-items: center;
    margin-top: 70px;
  }

  .hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
  }

  .hero_text2 {
    position: relative;
    z-index: 2;
    animation: fadeInUp 1s ease-out;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .hero_text2 h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #ffffff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    animation: slideInLeft 1s ease-out 0.3s both;
  }

  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(-50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .hero_text2 h4 {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    color: rgba(255, 255, 255, 0.8);
    animation: slideInRight 1s ease-out 0.6s both;
  }

  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .btn1 {
    background: var(--gradient-primary);
    color: white;
    padding: 15px 30px;
    border-radius: 50px;
    margin: 10px;
    display: inline-block;
    text-decoration: none;
    font-weight: 600;
    box-shadow: var(--shadow-medium);
    transform: translateY(0);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
  }

  .btn1::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }

  .btn1:hover::before {
    left: 100%;
  }

  .btn1:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-heavy);
    scale: 1.05;
  }

  /* Auto-scrolling Image Slider */
  .website-showcase {
    background: var(--white);
    padding: 80px 0;
    position: relative;
  }

  .website-showcase h2 {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 3rem;
    position: relative;
  }

  .website-showcase h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: 2px;
  }

  .slider-container {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: var(--shadow-heavy);
  }

  .slider-wrapper {
    display: flex;
    /* Remove auto-scrolling animation */
  }

  /* Remove auto-slide keyframes */

  .slide {
    min-width: 100%;
    position: relative;
    overflow: hidden;
    display: none;
  }

  .slide.active {
    display: block;
  }

  .slide img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .slide:hover img {
    transform: scale(1.05);
  }

  .slide-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    color: white;
    padding: 40px;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease;
  }

  .slide:hover .slide-overlay {
    transform: translateY(0);
    opacity: 1;
  }

  .slide-overlay h3 {
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .slide-overlay p {
    font-size: 1.1rem;
    opacity: 0.9;
  }

  /* Dark sections */
  .row_backimg {
    background: var(--primary-dark);
    color: var(--text-light);
    position: relative;
    overflow: hidden;
  }

  .row_backimg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%);
  }

  .row_backimg > * {
    position: relative;
    z-index: 2;
  }

  .flex_boxin {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 30px;
    margin: 20px;
    transition: all 0.3s ease;
    transform: translateY(0);
  }

  .flex_boxin:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-heavy);
    background: rgba(255, 255, 255, 0.15);
  }

  .flex_boxin i {
    font-size: 3rem;
    color: var(--accent-color);
    margin-bottom: 20px;
    transition: all 0.3s ease;
  }

  .flex_boxin:hover i {
    transform: scale(1.2);
    color: #60a5fa;
  }

  /* Light sections */
  .row2 {
    background: var(--light-bg);
    color: var(--text-dark);
  }

  .flex_pricingin {
    background: var(--white);
    border-radius: 20px;
    box-shadow: var(--shadow-light);
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }

  .flex_pricingin:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-heavy);
    border-color: var(--accent-color);
  }

  .temp_preview {
    background: var(--white);
    padding: 60px 0;
  }

  .demo_slider {
    animation: fadeIn 1s ease-out;
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  .temp_pre {
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: var(--shadow-light);
  }

  .temp_pre:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: var(--shadow-medium);
  }

  .temp_pre img {
    transition: all 0.3s ease;
  }

  .temp_pre:hover img {
    transform: scale(1.1);
  }

  /* Benefits section */
  .row33 {
    background: var(--secondary-dark);
    color: var(--text-light);
    position: relative;
  }

  .row33 h1 {
    color: #ffffff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  }

  .row33 p {
    color: rgba(255, 255, 255, 0.9);
  }

  .row33::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent 30%, rgba(59, 130, 246, 0.1) 50%, transparent 70%);
  }

  .row33 > * {
    position: relative;
    z-index: 2;
  }

  .benefit_box {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 30px;
    margin: 20px;
    transition: all 0.3s ease;
    text-align: center;
  }

  .benefit_box h3 {
    color: #ffffff;
    font-weight: 600;
  }

  .benefit_box p {
    color: rgba(255, 255, 255, 0.8);
  }

  .benefit_box:hover {
    transform: translateY(-10px) scale(1.05);
    background: rgba(255, 255, 255, 0.15);
    box-shadow: var(--shadow-heavy);
  }

  .benefit_box i {
    font-size: 3rem;
    color: var(--accent-color);
    margin-bottom: 20px;
    transition: all 0.3s ease;
  }

  .benefit_box:hover i {
    transform: rotate(360deg) scale(1.2);
    color: #60a5fa;
  }

  /* Features section */
  .row_features {
    background: var(--light-bg);
    color: var(--text-dark);
  }

  .cont_share_boxes {
    background: var(--white);
    border-radius: 10px;
    padding: 20px;
    margin: 10px;
    box-shadow: var(--shadow-light);
    transition: all 0.3s ease;
    border-left: 4px solid var(--accent-color);
  }

  .cont_share_boxes:hover {
    transform: translateX(10px);
    box-shadow: var(--shadow-medium);
    border-left-color: #60a5fa;
  }

  .cont_share_boxes i {
    color: var(--accent-color);
    margin-right: 10px;
    transition: all 0.3s ease;
  }

  .cont_share_boxes:hover i {
    transform: scale(1.3);
    color: #60a5fa;
  }

  /* Footer */
  .row_bottom {
    background: var(--primary-dark);
    color: var(--text-light);
  }

  footer {
    background: #0f172a;
    color: var(--text-light);
    text-align: center;
    padding: 20px;
  }

  /* Visitors box animation */
  .visitors_box {
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .header {
      display: none;
    }

    .mobile_header {
      display: flex;
    }

    .hero {
      margin-top: 60px;
      padding: 40px 20px;
    }

    .hero_text2 h1 {
      font-size: 2.5rem;
      line-height: 1.2;
    }
    
    .hero_text2 h4 {
      font-size: 1.2rem;
    }
    
    .btn1 {
      padding: 12px 24px;
      font-size: 0.9rem;
      margin: 5px;
      display: inline-block;
      width: auto;
    }
    
    .slide img {
      height: 300px;
    }
    
    .website-showcase h2 {
      font-size: 2rem;
      padding: 0 20px;
    }
    
    .slide-overlay {
      padding: 20px;
    }
    
    .slide-overlay h3 {
      font-size: 1.4rem;
    }

    .temp_preview {
      padding: 40px 10px;
    }

    .demo_slider {
      padding: 0 10px;
    }

    .card_tag {
      font-size: 18px;
      font-weight: 600;
      color: var(--text-dark);
      margin: 20px 0 10px 0;
      text-align: center;
      background: var(--accent-color);
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      display: inline-block;
      margin-left: 10px;
    }

    .expander_slide {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
      padding: 20px 10px;
    }

    .temp_pre {
      width: calc(50% - 10px);
      min-width: 150px;
      position: relative;
    }

    .temp_pre img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .new_lab, .new_lab2 {
      position: absolute;
      top: 5px;
      right: 5px;
      background: #ff4444;
      color: white;
      padding: 2px 6px;
      border-radius: 10px;
      font-size: 10px;
      font-weight: bold;
      z-index: 10;
    }

    .slide_popup_btn {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--accent-color);
      color: white;
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 12px;
      opacity: 0.9;
    }

    .title_sample {
      font-size: 2rem;
      text-align: center;
      margin: 40px 20px 20px 20px;
      color: var(--text-dark);
    }

    .sub_title {
      text-align: center;
      color: var(--text-dark);
      margin-bottom: 30px;
      padding: 0 20px;
    }

    .benefit_box {
      margin: 10px;
      padding: 20px;
    }

    .flex_boxin {
      margin: 10px;
      padding: 20px;
    }

    .flex_pricingin {
      margin: 10px;
      padding: 20px;
    }
  }

  @media (max-width: 480px) {
    .hero_text2 h1 {
      font-size: 2rem;
    }

    .temp_pre {
      width: calc(100% - 20px);
    }

    .btn1 {
      display: block;
      width: calc(100% - 20px);
      margin: 10px;
      text-align: center;
    }
  }

  /* Loading animations */
  .animate-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
  }

  .animate-on-scroll.animated {
    opacity: 1;
    transform: translateY(0);
  }

  /* Smooth scrolling */
  html {
    scroll-behavior: smooth;
  }

  /* Custom scrollbar */
  ::-webkit-scrollbar {
    width: 8px;
  }

  ::-webkit-scrollbar-track {
    background: var(--light-bg);
  }

  ::-webkit-scrollbar-thumb {
    background: var(--accent-color);
    border-radius: 4px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #60a5fa;
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


<!-- Website Showcase Slider (Replacing Poster Maker Section) -->
<div class="website-showcase animate-on-scroll">
    <h2>Professional Website Solutions</h2>
    <div class="slider-container">
        <div class="slider-wrapper">
            <div class="slide">
                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Instant Website" loading="lazy">
                <div class="slide-overlay">
                    <h3>Instant Website Creation</h3>
                    <p>Get your professional website up and running in minutes with our AI-powered instant website builder.</p>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Customized Website" loading="lazy">
                <div class="slide-overlay">
                    <h3>Fully Customized Websites</h3>
                    <p>Tailored solutions that perfectly match your brand identity and business requirements.</p>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="E-commerce Website" loading="lazy">
                <div class="slide-overlay">
                    <h3>E-commerce Solutions</h3>
                    <p>Complete online store setup with payment integration, inventory management, and order tracking.</p>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="row row_backimg animate-on-scroll">

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


<div class="row2 animate-on-scroll" id="business">

		
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


<h1 class="title_sample animate-on-scroll" id="card-demo"><span class="bc_bg">D</span>emo Business Card/Mini Website </h1>
<p class="sub_title">Click on image to see demo</p>
<div class="temp_preview animate-on-scroll">

	
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

<div class="row33 animate-on-scroll">
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
<div class="row_features animate-on-scroll">
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

<script>
// Simple slider without auto-scroll
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    if (slides.length > 0) {
        slides[0].classList.add('active');
    }
});

// Scroll animations
function animateOnScroll() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('animated');
        }
    });
}

// Initialize animations on scroll
window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

</body>
</html>