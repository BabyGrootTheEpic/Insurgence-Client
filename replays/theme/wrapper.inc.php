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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.5913819965614833" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.19430031512616797" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.41958127063227724" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9419751967969026" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.16818317084588363" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.46354897902355985" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5172571958099841"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6729070388283351" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5886078768057834">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7127830444738772">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6660152127298828">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4284575514764182">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.8183159933793587"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.41885219138196716"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.4631750345401082"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6091560750991216"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.748658814837488"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.6966286404348132"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8926547660873363"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.07956424474330359"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.4822434837394678"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.13536027704835263"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5294903360158316"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.9614726691672018"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.3016277833830652"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.18519801855488827"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.23966567172614917"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6507589466267796"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.7570413770438524"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.49805880749351017"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.09882898954898378"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
