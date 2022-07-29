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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.4658903791743627" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.017607718198143107" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4046789502541812" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6813348296332034" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.01696536580366348" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.8612971856520057" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7737261197629082"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7508059564785183" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7171506517062751">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7318832636801083">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8751984745151404">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3297637771956501">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.2871406068519924"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.6408565910065707"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.7882893254282248"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9434712660824602"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.54695435814061"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.24041977527393632"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.2231951396281331"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.9009179929525575"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.1776398359661242"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.43926867640549494"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5172734080807524"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.09195982086607413"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.6641789944283256"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.2521903500944136"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.17046746666094736"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9349170348046336"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.590791979708672"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.449057703193515"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.44861156822856696"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
