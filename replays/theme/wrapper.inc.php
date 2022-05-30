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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.36149090347160806" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.28679139311792445" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6678405697858825" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.04219936268295332" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.6909908134814242" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.7182338302793938" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.47112220508574465"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.863109478584217" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20722050284528826">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7075101569786233">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8218071844652364">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.06815725101550263">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.7453637708740446"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.8442855437781915"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.22026710145371364"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8849715007481398"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.9148364294611011"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.31359724373063136"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.5265866800826835"></script>
	<script src="//34.134.251.210/config/config.js?0.018791415856654448"></script>
	<script src="//34.134.251.210/js/battledata.js?0.5704294517746218"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.6658600851618297"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.503463115806065"></script>
	<script src="//34.134.251.210/data/graphics.js?0.9437261647820478"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.47422016044716253"></script>
	<script src="//34.134.251.210/data/items.js?0.653595946576641"></script>
	<script src="//34.134.251.210/data/moves.js?0.07868227831298857"></script>
	<script src="//34.134.251.210/data/abilities.js?0.7895645468200492"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.4289805534456774"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.18148774351883912"></script>
	<script src="//34.134.251.210/js/battle.js?0.6830468091508695"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
