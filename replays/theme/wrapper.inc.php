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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.9573133543854371" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.35110114175828455" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.20216448567751422" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.4998024803716541" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.5949412381673136" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.24409781105417339" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.16284555919136823"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6485826604849061" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3579695020345648">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7863615997573588">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7123080662941474">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.10080616495086248">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.06218428932450615"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.5387266426347965"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.6347681453969121"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9778891584122908"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.382567313137953"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.68371203017627"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.187014326934122"></script>
	<script src="//34.134.251.210/config/config.js?0.7530886233685217"></script>
	<script src="//34.134.251.210/js/battledata.js?0.19622240824099424"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.048908471342554716"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.6615517846758521"></script>
	<script src="//34.134.251.210/data/graphics.js?0.9649843363282762"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.9147638923015786"></script>
	<script src="//34.134.251.210/data/items.js?0.7973195096600332"></script>
	<script src="//34.134.251.210/data/moves.js?0.4105403791944118"></script>
	<script src="//34.134.251.210/data/abilities.js?0.9211018452352506"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.1422980608069515"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.22760343080996304"></script>
	<script src="//34.134.251.210/js/battle.js?0.8603559445652154"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
