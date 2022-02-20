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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.936728754413688" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2302468399079478" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9531012953995666" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.4315423553178823" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.004165722331342714" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.19023458653020575" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.2992650853676482"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.22968176328099887" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5576233829207426">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4929828393365965">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.14411733488827605">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.12480452896100624">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5903890934793021"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.4467513535901333"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.4686128583462559"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6918512232157599"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.3289230553746463"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.35842582532653244"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.16293026797994492"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7125334460809649"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.16144391453684226"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.26878677120031647"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.17636480961913392"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.4249016070669267"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.4596050029084042"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.2708864641429787"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.4084293062309572"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.44512824534825945"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.914026968415053"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.5911525559418853"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5385645588231638"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
