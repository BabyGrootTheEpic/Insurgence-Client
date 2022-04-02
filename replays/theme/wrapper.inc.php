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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.7021578225919258" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.0967332042930158" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9766914029810005" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.35554358074913717" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.24298234247693862" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.6838074672246199" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5099225135929133"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5618757765392393" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.29276076317006083">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.28305799389515807">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5899170141218513">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6473019694809306">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.5986135804850929"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.4436248899916204"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.7531556079072872"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6246307113765115"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.4420455908417287"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.5074658911454835"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.4554606100314784"></script>
	<script src="//34.134.251.210/config/config.js?0.07052706530916963"></script>
	<script src="//34.134.251.210/js/battledata.js?0.8063071560992003"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.137665033039009"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.7387369052913517"></script>
	<script src="//34.134.251.210/data/graphics.js?0.5937037513929826"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.994773129132698"></script>
	<script src="//34.134.251.210/data/items.js?0.06794648999004838"></script>
	<script src="//34.134.251.210/data/moves.js?0.24898967912347625"></script>
	<script src="//34.134.251.210/data/abilities.js?0.6884713912850702"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.656768102031174"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.10474288594240955"></script>
	<script src="//34.134.251.210/js/battle.js?0.43561456979236746"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
