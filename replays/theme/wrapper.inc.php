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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6699461247864436" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5669856056066886" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.916177250530239" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.37077118701837697" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.24254340420750142" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6964930084957539" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.12871833735317684"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.41208469669955394" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.976780378964897">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.049092605654054156">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.23315534609622923">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6072588769385332">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.33153044623439176"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.23157607991477813"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.9544658194069267"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1546683202168333"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.12057135117745021"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.6690611327105656"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.47472903696661994"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.027307847626704573"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.6769952560821519"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.25041579253093116"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.3743296500776385"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.17548587319382936"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.7351026307281006"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.4887350713233787"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.7011170919542602"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.06354258868283291"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.23040266044655722"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.5634927428307226"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5477597892805579"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
