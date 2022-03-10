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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.30193384930332523" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.12096897893931136" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9020102868495841" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.9858069439657404" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.023991478875801553" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.9125297162143451" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.19489119870529414"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5971539321482677" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.371683235333893">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9413866060920164">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8925075883219105">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.11406803583358682">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.14733670512094643"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.8083887055815355"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.7247933534839559"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3105045817856127"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.7179551428319486"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.38445789872909364"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.5639676180444009"></script>
	<script src="//34.134.251.210/config/config.js?0.5464422078368927"></script>
	<script src="//34.134.251.210/js/battledata.js?0.3456808645224434"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.5287599958275067"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.7528659252455414"></script>
	<script src="//34.134.251.210/data/graphics.js?0.23849063874986332"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.6596886316971129"></script>
	<script src="//34.134.251.210/data/items.js?0.5872795599195548"></script>
	<script src="//34.134.251.210/data/moves.js?0.9291597397165705"></script>
	<script src="//34.134.251.210/data/abilities.js?0.2743319560254216"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.5243125175456553"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.4598699462252356"></script>
	<script src="//34.134.251.210/js/battle.js?0.07212494405018188"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
