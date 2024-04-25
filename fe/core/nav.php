<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
	  <ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link active" href="/dynamic/">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="/dynamic/cv/">CV</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="/dynamic/gallery/">Gallery</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="/dynamic/contact">Contact</a>
		</li>
		</ul>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item">
				<span class="navbar-text" style="color:white;margin-right:5px">Logged in as: <?php echo $_SESSION['username'] ?></span>
				<a href="/dynamic/logout.php" class="btn btn-danger">Log Out</a>
			</li>
		</ul>
  </div>
</nav>