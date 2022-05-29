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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.5286446935694953" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5467272240461483" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.1109776575069421" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.37257847608701944" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.9591145173196998" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.41485402027729057" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.2228740037923158"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.03253547633640541" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14839828976083047">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9279858769027509">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.38280721454582745">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.505805617700168">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.7992419209780581"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.4383060027968282"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.38162909313885374"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27500633517135276"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.6828200263443731"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.9143593323981047"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.8813019568389964"></script>
	<script src="//34.134.251.210/config/config.js?0.7078396970074137"></script>
	<script src="//34.134.251.210/js/battledata.js?0.9232566025809434"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.7596929795497664"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.9779609239085743"></script>
	<script src="//34.134.251.210/data/graphics.js?0.5278087552851345"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.9651718783723258"></script>
	<script src="//34.134.251.210/data/items.js?0.31456722344724186"></script>
	<script src="//34.134.251.210/data/moves.js?0.9653242009477776"></script>
	<script src="//34.134.251.210/data/abilities.js?0.7717905501126965"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.45167747194198826"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.12204452280120437"></script>
	<script src="//34.134.251.210/js/battle.js?0.5683368434581437"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
