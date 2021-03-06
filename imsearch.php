<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html lang="en-GB" dir="ltr">
	<head>
		<title>Search - WEBSITE X5 UNREGISTERED VERSION - Welcome to SANIBEL Industries</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="SANIBEL INDUSTRIES" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 11.0.5.24 - UNREGISTERED VERSION - www.websitex5.com" />
		<meta name="viewport" content="width=1114" />
		<link rel="icon" href="favicon.png" type="image/png" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?24"></script>
		<script type="text/javascript" src="res/x5engine.js?24"></script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				
				
				<div class="search_form" style="position: absolute; top: 199px; left: 7px; width: 209px;"><form id="imSearch_0" action="imsearch.php" method="get" style="white-space: nowrap"><fieldset><input type="text" name="search" value="" style="width: 128px; line-height: 22px; font: normal normal normal 8pt Arial; color: #000000; background-color: #FFFFFF; background-image: url('res/imsearch.png'); background-position: 2px center; background-repeat: no-repeat; padding: 3px 3px 3px 21px; margin: 0; border: 1px solid #000000; vertical-align: middle;" /><span onclick="$('#imSearch_0').submit();" style="height: 22px; font: normal normal normal 8pt Arial; color: #000000; color: #000000; background-color: #D3D3D3; margin-left: 6px; padding: 3px 6px 3px 6px; border: 1px solid #000000; vertical-align: middle; cursor: pointer;">Search</span></fieldset></form></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu:</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode6">
						<span class="imMnMnFirstBg">
							<span class="imMnMnTxt"><span class="imMnMnImg"></span>PRODUCTS<span class="imMnMnLevelImg"></span></span>
						</span>
						<ul class="auto">
							<li id="imMnMnNode7">
								<a href="wires---cables.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>WIRES &amp; CABLES</span>
									</span>
								</a>
							</li><li id="imMnMnNode8">
								<a href="pumps.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>PUMPS</span>
									</span>
								</a>
							</li><li id="imMnMnNode9">
								<a href="led-light.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>LED LIGHT</span>
									</span>
								</a>
							</li><li id="imMnMnNode10">
								<a href="home-appliances.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>HOME APPLIANCES</span>
									</span>
								</a>
							</li>
						</ul>
					</li><li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>HOME</span>
							</span>
						</a>
					</li><li id="imMnMnNode3">
						<a href="about-us.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>ABOUT US</span>
							</span>
						</a>
					</li><li id="imMnMnNode5">
						<a href="contact-us.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>CONTACT US</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Search results</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>
				  
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
				<div style="position: absolute; top: 37px; left: 2px; width: 1110px; height: 100px; overflow: hidden;"><marquee>©2015, All rights reserved Sanibel Industries</marquee></div>
				<div onclick="return x5engine.utils.imPopUpWin('files/sanibel_price_list_a9h37s09.pdf','imPopUp', 800, 600);" style="position: absolute; top: 117px; left: 141px; width: 56px; height: 58px; cursor: pointer;"></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Read this site again">Back to main menu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript</div></noscript>
	</body>
</html>
