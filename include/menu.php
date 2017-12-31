

<div id="header">
		<div id="logo">
			<h1><a href="#">محمد رحیمی نوا </a></h1>
		</div>
		<div id="menu">
			<ul>
                               <li calss="login" ><a  calss="login"  href="#"  accesskey="2" title="">
                                    <?php 
                                    if( isset($_SESSION['login_user'])){
                                    echo "خوش آمدید  ".$_SESSION['login_user']."کاربر";
                                    }?>
                                </a></li>
				<li><a href="login.php" accesskey="2" title="">ورود</a></li>
				<li><a href="contactUs.php" accesskey="2" title="">تماس با ما</a></li>
				<li><a href="aboutUs.php" accesskey="3" title="">درباره ما</a></li>
				<li><a href="#" accesskey="4" title="">محصولات</a></li>
				<li><a class="current_page_item" href="index.php" accesskey="5" title="">  صفحه اصلی</a></li>
			</ul>
		</div>
                
	</div>
	<div id="banner">
		<div class="img-border"> <a href="#"><img src="images/header-img.jpg" width="1120" height="400" alt="" /></a> </div>
	</div>