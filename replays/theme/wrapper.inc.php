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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.9755916654717383" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4346201725970318" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.42404257974227866" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.41677003050466754" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.32376877445128494" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.5992228543423508" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.2918722039256567"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5013294608975307" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.920922294810159">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6854632817776334">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.42210378158377115">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5853549645649481">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.04539346056429716"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.27839301201261324"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.17253677590881655"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6214994138376619"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.5015070677388205"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.956942191119138"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.5531160798888393"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.10632662584827157"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.07090503188309616"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7476259127624882"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5209498592268085"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7977524949256882"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.819980453960625"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.16348793545678864"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.531128585236869"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8267377007415557"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.7401363743204554"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.15462771490478366"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.09273070717110787"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
