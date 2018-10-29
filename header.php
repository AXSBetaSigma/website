<header class="container-fluid">
	<div class="header-subsection">
		<img id='logo-image'  src='images/axs_logo.png'>
	</div>
	<div class="header-subsection" style="margin-left: auto; margin-right: auto;">
		<span id="aims">to bind &#11041; to strive &#11041; to aid</span>
	</div>
	<div class="header-subsection">
		<h6 class='text-uppercase'>professional co-ed chemistry fraternity</h6>
		<h1 class='text-uppercase'>alpha chi sigma</h1>
		<h5>beta sigma chapter</h5>
	</div>
	<ul id="main-nav-bar" class="container-fluid nav nav-pills nav-fill text-uppercase" style="clear: both;">
		<li class="nav-item">
			<a class='nav-link' href="index.php">home</a>
		</li>
		<li class="nav-item">
			<a class='nav-link' href="about_us.php">about us</a>
		</li>
		<li class="nav-item" >
			<a class='nav-link' href="events.php">events</a>
		</li>
		<li class="nav-item">
			<a class='nav-link' href="meet_brother.php">meet the brothers</a>
		</li>
		<li class="nav-item">
			<a class='nav-link' href="become_a_brother.php">become a brother</a>
		</li>
		<li class="nav-item">
			<a class='nav-link' href="https://www.alphachisigma.org/">national website</a>
		</li>
		<li class="nav-item">
			<a class='nav-link' href="contact_us.php">contact us</a>
		</li>
	</nav>
</header>
<script>
navbar = document.getElementById("main-nav-bar")
for (node=navbar.firstElementChild; node != null; node = node.nextElementSibling) {

	links_to = node.firstElementChild.attributes['href'].value;
	if (location.pathname.endsWith(links_to)) {
		node.classList.add("active");
		break;
	}
}
</script>