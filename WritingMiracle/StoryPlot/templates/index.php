<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Decide your plot now! <span style="font:12px PingFangSC-Regular; ">现在就决定故事开头！</span>';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Story Plot | 小作家神器">
	<meta name="twitter:image" content="https://sophiabao.com/diet/resources/photo-1474366521946-c3d4b507abf2.jpg">
	<meta name="twitter:url" content="https://sophiabao.com/diet/contact-form/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="小作家神器">
	<meta property="og:title" content="Story Plot | 小作家神器">
	<meta property="og:image" content="https://sophiabao.com/diet/resources/photo-1474366521946-c3d4b507abf2.jpg">
	<meta property="og:url" content="https://sophiabao.com/diet/contact-form/index.php"> 

	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

	<title>Story Plot | 小作家神器</title>
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/Mountains/consolidated.css?rwcache=660308082" />
		
	    
</head>

<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
    <div class="hero" id="hero">
        <nav class="navbar navbar-expand-lg pt-3">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item active"><a href="./" rel="" class="nav-link">Story Plot</a></li></ul>
                </div>
            </div>
        </nav>

        <div class="hero-content" id="hero">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="hero-title display-1" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">小作家神器</h1>
                        <h2 class="hero-slogan font-italic display-4" data-aos="fade-right" data-aos-delay="350" data-aos-duration="500">主题写作增加创作灵感</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-background"></div>
    </div>


	<main class="content">
		<div class="container">
			<div class="row intro justify-content-between">
				<div class="col-sm-8 intro-col" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                    
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Story General Topic 故事总主题</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

				</div>
				<div class="sidebar col-sm-4 order-md-8" data-aos="fade-up">
					<div class="logo" data-aos-delay="450" data-aos-duration="500">
						<img src="../rw_common/images/截屏2021-12-04 下午4.31.39.png" width="376" height="260" alt="小作家神器"/>
                    </div>

                    <div class="mt-5">
                        <h3 class="sidebar-title">
                            
                        </h3>
                        
                        
                    </div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col" data-aos="fade-right" data-aos-delay="0" data-aos-duration="500">
						<div class="footer-content text-center">
							&copy; 2021 Sophia BAO <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":so";var _rwObsfuscatedHref3 = "phi";var _rwObsfuscatedHref4 = "aba";var _rwObsfuscatedHref5 = "oz@";var _rwObsfuscatedHref6 = "icl";var _rwObsfuscatedHref7 = "oud";var _rwObsfuscatedHref8 = ".co";var _rwObsfuscatedHref9 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
                        </div>

						<ul class="navbar-nav mr-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item active"><a href="./" rel="" class="nav-link">Story Plot</a></li></ul>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script type="text/javascript" src="../rw_common/themes/Mountains/js/main.js?rwcache=660308082"></script>
</body>

</html>