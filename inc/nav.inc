<nav>
	<ul>
		<li<?php if ($thisPage=="home") echo " id=\"currentPage\""; ?>><a href="index.php">Resume</a></li>
		<li<?php if ($thisPage=="portfolio") echo " id=\"currentPage\""; ?>><a href="portfolio.php">Portfolio</a></li>
		<li<?php if ($thisPage=="contact-form") echo " id=\"currentPage\""; ?>><a href="contact-form.php">Contact</a></li>
	</ul>
</nav>