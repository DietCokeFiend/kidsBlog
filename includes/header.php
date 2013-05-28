<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/main.css" />


<script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

<!--     facebook script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- end of facebook script -->

<!-- Nav Bar -->

<?php
	$current_url = 'http://www.quinyung.com' . $_SERVER['REQUEST_URI'];
?>

<div class="row">
<header class="large-12 columns">
	<div class="nav-bar right">
	   <ul class="button-group">
		<li><a href="http://www.quinyung.com/kids-summer-zone/" title="Kids Summer Zone Home Page" class="button">Home</a></li>
		<li><a href="http://www.quinyung.com/kids-summer-zone/summer-attractions" class="button" title="Summer Attractions for Kids">Attractions</a></li>
		<li><a href="http://www.quinyung.com/kids-summer-zone/summer-outdoor-activities" class="button" title="Summer Outdoor Activities for Kids">Activities</a></li>
		<li><a href="http://www.quinyung.com/kids-summer-zone/summer-camps" class="button" title="Summer Camp for Kids">Camps</a></li>
		<li><a href="http://www.quinyung.com/kids-summer-zone/kids-safe-summer" class="button" title="Summer Safety for Kids">Safety</a></li>
		<li><a href="http://www.quinyung.com/kids-summer-zone/summer-gaming-for-kids" title="Summer Gaming for Kids" class="button">Gaming</a></li>
		</ul>
	</div>
	
	<h1>
		<a href="http://www.quinyung.com/kids-summer-zone/"><img src="img/kids-logo.png" class="logo" alt="Kids Summer Zone Logo" title="Summer Kids Zone Home"/></a>
	</h1>
	<div class="row">
		<div class="large-12 columns">
			<h6>The #1 online source for getting rid of your kids for the summer in the Greater Toronto Area.</h6>
		</div>
	</div>
	<hr />
</header>

<!--    top facebook like, twitter share, linkedin share  -->
	<div class="row">
		<aside class="right">
			<script src="//platform.linkedin.com/in.js" type="text/javascript">
			</script>
			<script type="IN/Share" data-counter="right" data-showzero="true" data-url="<?= $current_url ?>"></script>
			
			<div class="fb-like" data-href="<?= $current_url ?>" data-send="false" data-layout="button_count" data-width="250" data-show-faces="false"></div>
			
			<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				
		</aside>
	</div>
	<!--   end of media share  -->

</div>

<!-- End Nav -->