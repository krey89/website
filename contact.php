<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!--make sure that this file communicates with submit.php inorder to process form, instead of this way the action could have been submit.php which would of redirect the page also  -->
		<?php include('submit.php'); ?>
	</head>
	<body class="contact">
		<div id="page-wrapper">
			<!-- navigation bar -->
			<header id="header">
				<nav id="nav">
					<ul>
						<li class="submenu">
							<a href="#">Menu</a>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li class="submenu">
									<a href="otherpage.html">OtherPage</a>
									<ul>
										<li><a href="otherpage.html#first">first</a></li>
										<li><a href="otherpage.html#second">second</a></li>
										<li><a href="otherpage.html#third">third</a></li>

									</ul>
								</li>
								<li><a href="somepage.html">SomePage</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</header>

			<!-- Page heading -->
				<article id="main">
					<header class="special container">
						<span class="icon fa-envelope"></span>
						<h2>Get In Touch</h2>
					</header>

						<section class="wrapper style4 special container 75%">

							<!--div adjusts the width of the inputs depending on screen -->
							<div class="contactContDiv">

							<!-- contact form -->
								<div class="content">
									<!-- action is calling itself so the page reloads instead of being redirect to another page  -->
									<!--echo htmlspecialchars helps to prevent against any server injections -->
										<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
										<div class="row 50%">
											<div class="12u">
												<input type="text" name="customer" placeholder="Name:"  required/>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<input type="email" name="email" placeholder="Email:"  required/>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<input type="text" name="subject" placeholder="Subject:" required/>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" placeholder="Message:" rows="10" required></textarea>
											</div>
										</div>
										<div class="row">
											<!-- add data-sitekey -->
											<div class="g-recaptcha" data-sitekey="6Lea9SYUAAAAAC5mhedqX9WANOIyhKFZ4y--KP77"  data-callback="enableBtn"></div>
											<div class="12u">
												<ul class="buttons">
													<li><input disabled type="submit" class="special"  id= "submit" value="Send Message"/></li>
												</ul>
											</div>

										</div>
									</form>
								</div>
							</div>
						</section>
				</article>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Your_Company,Ltd..</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
