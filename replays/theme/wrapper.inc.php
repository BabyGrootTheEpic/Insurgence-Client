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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.5004160622686455" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6789889032371221" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6792632938256056" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.4113395705272225" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.4912503629080398" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.6103095452748228" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.1441607200984918"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7010209614759966" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6807761461654425">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.471613216000933">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.4005128966902356">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3705592457832847">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.5368010631048941"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.42223903333163126"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.8857208526514506"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31400559786503135"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.8815628678757037"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.7162668735576132"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.8124540564886671"></script>
	<script src="//34.134.251.210/config/config.js?0.02842193837419149"></script>
	<script src="//34.134.251.210/js/battledata.js?0.10917125050141996"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.7280950130960682"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.6924769956689698"></script>
	<script src="//34.134.251.210/data/graphics.js?0.735476340826464"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.049448371702296434"></script>
	<script src="//34.134.251.210/data/items.js?0.6610113502699246"></script>
	<script src="//34.134.251.210/data/moves.js?0.32371830535667256"></script>
	<script src="//34.134.251.210/data/abilities.js?0.5935168769646912"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.9482983611165416"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.33076372073226734"></script>
	<script src="//34.134.251.210/js/battle.js?0.8224759646161299"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
