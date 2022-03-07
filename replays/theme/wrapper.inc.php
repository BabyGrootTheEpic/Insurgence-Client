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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.3575403217056543" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.05361761531834208" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.42692425635483766" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6194308988638093" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.49686009293450684" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.354157654123578" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8939231341939631"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7316981577950796" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3795540624467726">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5221981256405421">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.10166275431823624">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5818015389830471">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.668146866369234"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.2781670656089934"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6722488702047129"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1581874803304706"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.25747284552112637"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.41515422045083605"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8690528822264387"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.726165301093842"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.904880821809805"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.07938734165719952"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8005992467525691"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7055182960941431"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.4251066542842392"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.8088047612739819"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.3315824229445794"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9661011010128602"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.5648981571094445"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8091263365597012"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.48681403842097803"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
