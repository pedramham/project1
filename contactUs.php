<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Condorific 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130412

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <?php 
  include_once("include/header.php");
?>
</head>

<body>
<div id="header-wrapper">
    
 <?php
 ///menue
  include_once("include/menu.php");
?>
</div>
<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			<div id="content">
                            <?php
                            ///sectionHome
                            include_once("include/sectionContactUs.php");
                            ?>
			</div>
			<div id="sidebar">
		           <?php
                            ///sectionRight
                            include_once("include/sectionRight.php");
                            ?>
			</div>
		</div>
	</div>
</div>

<div id="footer" class="container">
      <?php
    ///sectionRight
    include_once("include/footer.php");
    ?>
</div>
</body>
</html>
