<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php require_once('head.php'); ?>
	</head>
	
	<body id="body" data-ng-app="contactApp">
		
		<!--Preloader-->
		<div class="preloader-it">
			<div class="mdl-spinner mdl-js-spinner is-active is-upgraded" data-upgraded=",MaterialSpinner"><div class="mdl-spinner__layer mdl-spinner__layer-1"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-2"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-3"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-4"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div></div>
		</div>
		<!--/Preloader-->
		
		<!--Main Wrapper-->
		<div class="main-wrapper">
		
			<!--Bg Image-->
			<div class="bg-struct bg-img"></div>
			<!--/Bg Image-->
			
			<div class="mdl-js-layout mdl-layout--fixed-header">
				
				<!--Top Header-->
				<header class="mdl-layout__header">
					<?php require_once('nav.php'); ?>
				</header>
				<!--/Top Header-->
				
				<!--Main Content-->
				<div class="main-content relative">
					<?php require_once('content.php'); ?>
						<!--Footer Sec-->
						<footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
							<?php require_once('footer.php'); ?>				
						</footer>
						<!--Footer Sec-->
					</div>
				</div>	
				<!--/Main Content-->
							
			</div>	
		</div>	
		<!--/Main Wrapper-->
		
		<?php require_once('js.php'); ?>
	</body>
</html>
