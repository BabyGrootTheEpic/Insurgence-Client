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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.2687755343219782" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.32174354861749754" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5204416008929391" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.01841245024233773" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.7312653338184432" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.3438507204489265" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.15540203683975817"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.34930433641927916" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18164495385298185">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5228184397476308">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6490961376045647">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6380957964109453">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.701179589584334"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.3325664130855204"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.9145560322862758"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6019787961128982"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.15667716792238795"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.4876656303372926"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.25753475219562083"></script>
	<script src="//34.134.251.210/config/config.js?0.7453492302252032"></script>
	<script src="//34.134.251.210/js/battledata.js?0.17255757146311046"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.13592311002159874"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.034852149917168784"></script>
	<script src="//34.134.251.210/data/graphics.js?0.01307155634177204"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.06075346666549941"></script>
	<script src="//34.134.251.210/data/items.js?0.10810233255639967"></script>
	<script src="//34.134.251.210/data/moves.js?0.35531703328722597"></script>
	<script src="//34.134.251.210/data/abilities.js?0.888742403531362"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.13859124203823403"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.9143684110208903"></script>
	<script src="//34.134.251.210/js/battle.js?0.3787552908047809"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
