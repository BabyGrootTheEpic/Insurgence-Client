<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.3637238380202781" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.849785029167935" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8905873780227662" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.6701458180190945" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.1951079934398836" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.7420873825995546" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7805512304650648"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.020871340989593534" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6329616757798384">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.420024609587899">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9352771224826866">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9007482987360287">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.9112899157688441"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.5972399223711304"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.9866744937470955"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46457386883484775"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.8552509921302993"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.6480997847218266"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.9076134670776825"></script>
	<script src="//34.134.251.210/config/config.js?0.7427385987625585"></script>
	<script src="//34.134.251.210/js/battledata.js?0.46195830416317274"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.5388615436755446"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.2639785689031289"></script>
	<script src="//34.134.251.210/data/graphics.js?0.5559426863709"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.3770336719525915"></script>
	<script src="//34.134.251.210/data/items.js?0.9703694687874569"></script>
	<script src="//34.134.251.210/data/moves.js?0.5951199534881739"></script>
	<script src="//34.134.251.210/data/abilities.js?0.3040937399106005"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.4919372389252732"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.05241432663309409"></script>
	<script src="//34.134.251.210/js/battle.js?0.599577059025753"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
