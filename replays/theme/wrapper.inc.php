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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.12090552492668616" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2800832570906835" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8579509867752426" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9108740637282196" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5596271445065775" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.5308524228338545" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4234766237472769"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6691562238859228" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18818068087031814">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.043249078304796296">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.992080781041017">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.48365015407644996">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.10421509878672897"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.06589823292447128"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.627606352255794"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9202627371459262"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.539527625374431"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.23015717947334746"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.09058161441848278"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.5363227895425833"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.33048496157936236"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.42844089142631425"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.714444823477858"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.40305182169979425"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.4408646380021952"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7024614383234291"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.8331356152193872"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.09987205222915119"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.26595861129486065"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.1654354892038996"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.7619596334477132"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
