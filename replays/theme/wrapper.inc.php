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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.301823418143653" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.651580182624363" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6213727540371454" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.8249061009604084" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.6273260026483369" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.5776185842324979" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7424907150369116"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9050034034940744" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12036136138657749">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7771594820330694">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.865511539249687">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7446635541337991">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.5668535168171123"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.17498386067134186"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.6521059401107236"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.00804108763516398"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.06890710693032664"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.5177467573195891"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.33286306267497023"></script>
	<script src="//34.134.251.210/config/config.js?0.5992253165954007"></script>
	<script src="//34.134.251.210/js/battledata.js?0.19210815312873475"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.6610209948627475"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.4897023314992883"></script>
	<script src="//34.134.251.210/data/graphics.js?0.16114568577393196"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.7339976951381708"></script>
	<script src="//34.134.251.210/data/items.js?0.5485351229055437"></script>
	<script src="//34.134.251.210/data/moves.js?0.15420175387832646"></script>
	<script src="//34.134.251.210/data/abilities.js?0.402248597668617"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.6688356300454124"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.6936247927661616"></script>
	<script src="//34.134.251.210/js/battle.js?0.711154541305625"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
