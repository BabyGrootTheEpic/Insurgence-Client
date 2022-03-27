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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.5284444474468173" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5210064798794016" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.09517766277188766" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.3000660920157634" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.6875383726111866" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.5663728025648633" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.29777126609020543"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6915915523626996" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8258184410482337">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8318358317918844">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3626395889115661">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9911066841444636">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.31708740454663475"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.6058402320150493"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.4376538667102903"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2920697489010833"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.5909772727269746"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.510558887961098"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.2975552500377854"></script>
	<script src="//34.134.251.210/config/config.js?0.8827617389099702"></script>
	<script src="//34.134.251.210/js/battledata.js?0.5647466467986693"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.7467701203495036"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.39769164213867114"></script>
	<script src="//34.134.251.210/data/graphics.js?0.7798885243353648"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.06595584123706133"></script>
	<script src="//34.134.251.210/data/items.js?0.4302436976588917"></script>
	<script src="//34.134.251.210/data/moves.js?0.7046998490714242"></script>
	<script src="//34.134.251.210/data/abilities.js?0.6874094557592443"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.80831466123457"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.8903843774017941"></script>
	<script src="//34.134.251.210/js/battle.js?0.3312060208198979"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
