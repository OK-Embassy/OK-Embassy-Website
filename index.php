<?php 
if (!empty($_POST)){
    $to = "info@okcashembassy.ca"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contact";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>OK Embassy</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/OK_backless.png"/>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">What we do</a></li>
							<li><a href="#two">Projects</a></li>
							<li><a href="#three">Get in touch</a></li>
							<li><a href="buy">Trade</a></li>
							<li><a href="http://okcash.co/faq.html" target="_blank">OKCash FAQ</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1><img src="images/OK_backless.png" width="75" height="75" /> Embassy</h1>
								<h2>We are the face of OKCash, Canadian community leader</h2>
									
									<h3>OUR MISSION</h3>
										<ul>Helping individuals to understand Cryptocurrency and how it changes the world.</ul> 
										<ul>Bring awarness about OKCash and how quick and easy it is to use, while encouraging the use of Bitcoin.</ul>
									<p>OKCash is a new Cryptocurrency that got released in November 2014. Since the start, OK has shown a unique interest in the end user and tried to make the coin accessible and easy to use for the community.</p>
									<p>OK complements BTC, with its speed and Proof-of-Stake (PoS) system which makes it a day to day currency and also works as an earning system.</p>
										<blockquote>
										<p>We are the nerds, the misfits, the rebels, the trouble makers, the crazy ones enough to believe we can do so with our passion. Decentralize everything and Empower Everyone.</p>
										<i>- Oktoshi, creator of OKCash and ROKOS</i>
										</blockquote>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Learn more</a></li>
							</ul>
						</div>
					</section>
					
				<!-- One -->
					<section id="one" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>What we do</h2>
							<p>We provide every individuals the information they need to start receiving and accepting OKCash. We give advice, tools, and the support anyone could ever need.</p>
							<div class="features">
							<section>
									<span class="icon major fa-chain"></span>
									<h3>Information</h3>
									<p>We provide informations and tips about OKCash.</p>
								</section>
								<section>
									<span class="icon major fa-money"></span>
									<h3>Trading</h3>
									<p>We trade OKCash directly, which means there is no need to buy Bitcoins and buy OK on an exchange.</p>
								</section>
							</div>
							<ul class="actions">
								<li><a target="_blank" href="what-we-do" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>
					
					<!-- Two -->
					<section id="two" class="wrapper style1 spotlights">
						<section>
							<a href="#" class="image"><img src="images/rokos.jpg" alt="" data-position="center center" width="100%" height="100%"/></a>
							<div class="content">
								<div class="inner">
									<h2>ROKOS, Cryptocurrency full-node OS</h2>
									<p>ROKOS is a Raspberry Pi, PINE64+ and other IoT device OS. The main purpose of ROKOS is to help you to connect to any blockchain at very low electricity cost.</p>
									<ul class="actions">
										<li><a href="projects#rokos" target="_blank" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/OKMAP_cut.jpg" alt="" data-position="top center" width="100%" height="100%"/></a>
							<div class="content">
								<div class="inner">
									<h2>OKMAP</h2>
									<p>Also known as OK Map, it is where you can find every business that accepts <img src="images/OK_backless.png" width="35" height="35" /> as form of payment.</p>
									<ul class="actions">
										<li><a href="projects#okmap" target="_blank" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>For any information about our availability and what we do, please leave your information down below and we will get in touch with you as soon as possible.</p>
							<div class="split style1">
								<section>
									<form method="POST" action="">
										<div class="field half first">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" required>
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" required>
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="5" required></textarea>
										</div>
										<ul class="actions">
											<li><a href="mailto:info@okcashembassy.ca?subject=subject&body=message" class="button submit" action="submit">SEND EMAIL</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Email</h3>
											<span><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="fb92959d94bb9490989a88939e96999a888882d5989a">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></span>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(514) 885-5082</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a target="_blank" href="https://twitter.com/ok_embassy" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a target="_blank" href="https://www.facebook.com/OK-Embassy-350520988647314/" class="fa-facebook"><span class="label">Facebook</a></span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>