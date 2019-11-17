<?php include("./config/Randomness_Reskinning_config.php"); ?>
<!doctype html>
<html lang="en" dir="ltr" class="no-js">
<head>
<meta charset="UTF-8">
	<title><?php echo $Randomness_Reskinning__website_title ; ?></title>
	<meta name="description" content="<?php echo $Randomness_Reskinning__website_description ; ?>" />
	<?php
		$root = '';
		$path = 'assets/images/';
		function getImagesFromDir($path) {
			$images = array();
			if ( $img_dir = @opendir($path) ) {
				while ( false !== ($img_file = readdir($img_dir)) ) {
					if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
						$images[] = $img_file;
					}
				}
				closedir($img_dir);
			}
			return $images;
		}
		function getRandomFromArray($ar) {
			mt_srand( (double)microtime() * 1000000 ); 
			$num = array_rand($ar);
			return $ar[$num];
		}
		$imgList = getImagesFromDir($root . $path);
		$img = getRandomFromArray($imgList);
		$Randomness_Reskinning__fa_tw_title = $Randomness_Reskinning__fa_tw_title[array_rand($Randomness_Reskinning__fa_tw_title)];
		$Randomness_Reskinning__fa_tw_description = $Randomness_Reskinning__fa_tw_description[array_rand($Randomness_Reskinning__fa_tw_description)];
		$six_number = mt_rand(100000, 999999);
	?> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="robots" content="index, follow">
    <meta name="distribution" content="web">
    <meta http-equiv="expires" content="0" />
	<!-- Facebook & Twitter Cards -->
		<meta property="og:title"				content="<?php echo $Randomness_Reskinning__fa_tw_title ; ?>" />
		<meta property="og:description"			content="<?php echo $Randomness_Reskinning__fa_tw_description ; ?>" />
		<meta property="og:image"				content="<?php echo $path . $img .'?'. $six_number ?>" />
		<meta name="twitter:card"               content="summary_large_image" />
		<meta name="twitter:site"               content="@Reskinning" />
		<meta name="twitter:creator"            content="@Reskinning" />
	<!-- End Facebook & Twitter Cards -->
	<link rel='stylesheet' href="./assets/css/css.css" type='text/css'>
	<link rel="stylesheet" href="./assets/css/style.css"> 
    <link href="./assets/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "<?php echo $Randomness_Reskinning__ads ; ?>",
        enable_page_level_ads: true
      });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $Randomness_Reskinning__analytics ; ?>"></script>
    <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', '<?php echo $Randomness_Reskinning__analytics ; ?>');
    </script>
    <script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '<?php echo $Randomness_Reskinning__pxl ; ?>');
		fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=<?php echo $Randomness_Reskinning__pxl ; ?>&ev=PageView&noscript=1" />/>
    </noscript>
</head>
<body>
	<div id="fb-root"></div>
		<script>
			window.fbAsyncInit = function() {
				FB.init({
					xfbml            : true,
					version          : 'v4.0'
				});
			};
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	<div class="fb-customerchat"
		attribution=setup_tool
		page_id="<?php echo $Randomness_Reskinning__fb_page_id ; ?>"
		theme_color="#0084ff">
	</div>
	<div class="reskinning">
		<div id="logo" class="logo" >
			<a href="index.php">
				<img src="assets/logo.png" alt="<?php echo $Randomness_Reskinning__website_description ; ?>" title="<?php echo $Randomness_Reskinning__website_title ; ?>" >
			</a>
		</div>
		<div class="navbar" id="topnav">
			<a class="fa fa-home" href="index.php"></a>
			<a class="navlinks  <?php if (basename($_SERVER['PHP_SELF']) == "about.php") { ?> selected <?php } ?> " href="about.php">About us</a>  
			<a class="navlinks  <?php if (basename($_SERVER['PHP_SELF']) == "terms_conditions.php") { ?> selected <?php } ?> " href="terms_conditions.php">Terms</a> 
			<a class="navlinks  <?php if (basename($_SERVER['PHP_SELF']) == "privacy_policy.php") { ?> selected <?php } ?> " href="privacy_policy.php">Privacy</a>  
			<a class="navlinks  <?php if (basename($_SERVER['PHP_SELF']) == "contact.php") { ?> selected <?php } ?> " href="contact.php">Contact</a>
		<div id="nav-share">
			<a href="https://facebook.com/sharer.php?u=<?php echo $Randomness_Reskinning__website_url .'?'. $six_number ; ?>" target="blank"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/share?url=<?php echo $Randomness_Reskinning__website_url .'?'. $six_number ; ?>" target="blank"><i class="fa fa-twitter"></i></a>
		</div>
			<a href="javascript:void(0);" class="icon" onclick="navjs()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<script>
		function navjs() {
		  var x = document.getElementById("topnav");
		  if (x.className === "navbar") {
			x.className += " responsive";
		  } else {
			x.className = "navbar";
		  }
		}
		</script>