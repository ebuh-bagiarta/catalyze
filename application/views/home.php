<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/swiper.min.css">
    <script src="<?php echo base_url();?>assets/js/swiper.min.js"></script>
    <meta name="description" content="">
   	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
   </head>
<body>
<div class="wrapper border">
	<div class="container">
		<div class="header-top">
			<div class="logo">
				<img src="<?php echo base_url();?>assets/images/logo1.png" alt="">
			</div>
			<div class="navigation">
				<ul>
					<li><a>Home</a></li>
					<li><a>About</a></li>
					<li><a>Work</a></li>
					<li><a>Services</a></li>
				</ul>
			</div>

			<div class="social">
				<ul class="social-item">
					<li><a><img src="<?php echo base_url();?>assets/images/fb-icon.png"></a></li>
					<li><a><img src="<?php echo base_url();?>assets/images/twitter-icon-top.png"></a></li>
					<li><a><img src="<?php echo base_url();?>assets/images/googleplus-icon.png" ></a></li>
					<li><a><img src="<?php echo base_url();?>assets/images/fb-icon.png" ></a></li>
				</nav>
			</div>
		</div>
	</div>
</div>
<div class="wrapper connect">
	<div class="container">
		<div class="alternate-link">
				<nav>
					<a>RSPO</a>
					<a>WWF International</a>
					<a>WWF Tiger Alive Initiative</a>
					<a>World Resource Institute</a>
					<a>The Coral Triangle</a>
				</nav>
			</div>
	</div>
</div>
<div style="clear:both"></div>
<div class="wrapper" style="overflow: auto;">
	<div class="head-container"  style="overflow: auto;">
		<div class="main-news">
			<img src="<?php echo base_url();?>assets/images/slide1.jpg">
			<div class="text-block">
				<h2>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</h2>
				<p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
			</div>
		</div>
		<div class="right-news">
			<div class="top-news">
				<img src="<?php echo base_url();?>assets/images/moza1.jpg">
				<div class="text-block-right">Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</div>
			</div>
			<div class="bottom-news">
				<img src="<?php echo base_url();?>assets/images/moza1.jpg">
				<div class="text-block-right">Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</div>
			</div>
		</div>
	</div>
</div>
<div class="wrapper slide">
		<div class="container ">
			 <div class="swiper-container" >
			    <div class="swiper-wrapper">
			      <?php foreach($article->result() as $row):?>
						<?php if($row->image==''): ?>
						<div class="swiper-slide">
							<div class="date-slide"><?php echo date('j F Y',strtotime($row->date)); ?></div>
							<h3 class="title-slide"><?php echo $row->title;?></h3>
							<p class="only-text"><?php echo substr($row->description,0,100);?>Read More</p>
						</div>
						<?php else: ?>
						<div class="swiper-slide">
							<img src="<?php echo base_url();?>assets/images/<?php echo $row->image; ?>"/>
							<div class="date-slide"><?php echo date('j F Y',strtotime($row->date));?></div>
							<p class="desc-pict"><?php echo $row->title;?></p>
						</div>
					  	<?php endif;?>
			  		<?php endforeach;?>
			    </div>
			    <!-- Add Pagination -->
			    <div class="swiper-pagination"></div>
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>
			</div>
		</div>
</div>
	<div class="wrapper" style="clear:both; margin-bottom: 50px;">
		<div class="container">
			<div class="client">
				<h1>Client</h1>
			</div>
			<div class="client-logo">
				<div class="list-client">
						<div class="client-logo-image">
							<img src="<?php echo base_url();?>assets/images/logo1.jpg" class="logo1" >
						</div>
						<div class="client-logo-image">
						<img src="<?php echo base_url();?>assets/images/logo2.jpg" class="logo2">
						</div>
						<div class="client-logo-image">
						<img src="<?php echo base_url();?>assets/images/logo3.png" class="logo3">
						</div>
						<div class="client-logo-image">
						<img src="<?php echo base_url();?>assets/images/logo4.jpg" class="logo4">
						</div>
						<div class="client-logo-image">
						<img src="<?php echo base_url();?>assets/images/logo5.jpg" class="logo5">
						</div>
						<div class="client-logo-image">
						<img src="<?php echo base_url();?>assets/images/logo6.jpg" class="logo6">	
						</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="border"></div>
	<div class="wrapper media">
		<div class="container">
			<div class="social-embedd">
				<div class="box-social">
					<div class="head-facebook">
						<div class="col-facebook">
							<div class="account">Catalyze</div>
							<div class="like">1999 likes</div>
						</div>
						<div class="col-facebook">
							<button class="buttonlike">Like</button>
						</div>
					</div>
					<div class="container-facebook">
						<div class="feed-facebook">
							<h5>12 Jan 2017</h5>
							<p>
								lorem ipsumlorem ipsumlorem ipsumlorepsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsummlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem 
							</p>
							<img src="<?php echo base_url();?>assets/images/s4.jpg">
						</div>
							<div class="feed-facebook">
							<h5>12 Jan 2017</h5>
							<p>
								lorem ipsumlorem ipsumlorem ipsumlorepsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsummlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem 
							</p>
							<img src="<?php echo base_url();?>assets/images/s4.jpg">
						</div>
					</div>

				</div>
				<div class="box-social">
					<div class="head-twitter">
						<div class="catalyze-twitter">
							<img src="<?php echo base_url();?>assets/images/twitter-icon.png">
							
						</div>
						<div class="title-twitter">
							Catalyze
						</div>
						<div class="follow-twitter">
							<button class="twitter-button">Follow</button>
						</div>
					</div>
					<div class="container-twitter">
						<div class="feed-twitter">
							<div class="logo-catalyze-twitter"><img src="<?php echo base_url();?>assets/images/catalyze-icon.png"></div>
						
								<div class="account-catalyze-name">@catalyze</div>
								<div class="created-at">12 hrs</div>	
								<p>
									Lorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLorem
								</p>
								<img src="<?php echo base_url();?>assets/images/s4.jpg" class="image-twitter">
							
						</div>
						<div class="feed-twitter">
							<div class="logo-catalyze-twitter"><img src="<?php echo base_url();?>assets/images/catalyze-icon.png"></div>
						
								<div class="account-catalyze-name">@catalyze</div>
								<div class="created-at">12 hrs</div>	
								<p>
									Lorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLoremLorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLorem
								</p>
							
						</div>
						<div class="feed-twitter">
							<div class="logo-catalyze-twitter"><img src="<?php echo base_url();?>assets/images/catalyze-icon.png"></div>
						
								<div class="account-catalyze-name">@catalyze</div>
								<div class="created-at">12 hrs</div>	
								<p>
									Lorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLoremLorem ipsumLorem ipsumLorem
									Lorem ipsumLorem ipsumLorem
								</p>
							
						</div>

					</div>
				</div>
				<div class="box-social">
					<div class="head-twitter">
						<div class="catalyze-instagram">
							<img src="<?php echo base_url();?>assets/images/ig-icon.png" style="display: inline;">
						</div>
						<div class="title-instagram">
								Catalyze
						</div>
						<div class="follow-instagram">
							<button class="instagram-button">Follow</button>
						</div>
					</div>
					<div class="feed-instagram">
						<img src="<?php echo base_url();?>assets/images/ig1.jpg">
						<img src="<?php echo base_url();?>assets/images/ig2.jpg">
						<img src="<?php echo base_url();?>assets/images/ig3.jpg">
						<img src="<?php echo base_url();?>assets/images/ig4.jpg">
						<img src="<?php echo base_url();?>assets/images/ig5.jpg">
						<img src="<?php echo base_url();?>assets/images/ig6.jpg">
						<img src="<?php echo base_url();?>assets/images/ig1.jpg">
						<img src="<?php echo base_url();?>assets/images/ig2.jpg">
						
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper footer">
		<div class="container">
			<div class="about footer-col">
				<h4>ABOUT</h4>
				<ul>
					<li>Home</li>
					<li>About Us</li>
					<li>Contact</li>
					<li>Social Media</li>
					<li>Blo</li>
				</ul>
			</div>
			<div class="about footer-col">
				<h4>WORKS</h4>
				<ul>
					<li>Home</li>
					<li>About Us</li>
					<li>Contact</li>
					<li>Social Media</li>
					<li>Blo</li>
				</ul>
			</div>
			<div class="about footer-col">
				<h4>CLIENT</h4>
				<ul>
					<li>Home</li>
					<li>About Us</li>
					<li>Contact</li>
					<li>Social Media</li>
					<li>Blo</li>
				</ul>
			</div>
			<div class="about footer-contact">
				<h4>CONTACT US</h4>
				<p>
					Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
				</p>
				<input type="text" placeholder="Message" class="input your-message"/>
				<input  type="text" placeholder="Your Email Address" class="input email-address" />
				<input type="submit" class="submit-button">
			</div>
		</div>
	</div>
	<script src="<?php echo base_url();?>assets/js/catalyze.js"></script>
</body>
</html>