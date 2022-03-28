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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.25768985651759957" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.12070116272591891" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5451612270520856" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.7179895800791911" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.8680400710841534" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.48349989310264196" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.24817831557031544"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6602948816854228" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9801670817796075">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5453190619573538">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.858936389248389">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.1748004540692567">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.11095653997318666"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.7150660193703138"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.7683535143072617"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4168553468979328"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.655148629889239"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.2722592990366308"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.49718661478792936"></script>
	<script src="//34.134.251.210/config/config.js?0.8975093212036493"></script>
	<script src="//34.134.251.210/js/battledata.js?0.8120378653499025"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.2897508591696929"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.07072396196258302"></script>
	<script src="//34.134.251.210/data/graphics.js?0.4206189157456035"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.4384577318735523"></script>
	<script src="//34.134.251.210/data/items.js?0.7481975127497613"></script>
	<script src="//34.134.251.210/data/moves.js?0.22835099220226063"></script>
	<script src="//34.134.251.210/data/abilities.js?0.2939517268619325"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.1293353215614299"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.17221442157914568"></script>
	<script src="//34.134.251.210/js/battle.js?0.539967480671135"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
