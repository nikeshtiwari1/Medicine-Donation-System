
	<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="admin-index.php" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="admin-index.php">Medicine Donation</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="admin-index.php">Home</a>
							</li>
							
								   <?php 
					if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
  

								echo '<li><a href="admin-index.php">Profile</a></li>';
								echo '<li><a href="logout.php">Logout</a></li>';
								}
								else{
							
							echo '<li><a href="login.php">Login</a></li>';
							echo '<li><a href="signup.php">Sign Up</a></li>';
							}?>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>