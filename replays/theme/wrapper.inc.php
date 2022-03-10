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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.7218996064246095" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5075600325406444" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.561416472588435" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.5387726462114353" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.4378847434650872" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.9859987523489127" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.24332853510325592"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8693421020543062" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9100266733148679">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8833226954370907">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.1849935229644517">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.0785752355135747">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.8284592550840522"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.5542925959127327"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.13011830706951888"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2506965308066633"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.5950330464237259"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.40008541851809754"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.33467515351879373"></script>
	<script src="//34.134.251.210/config/config.js?0.8984613221967694"></script>
	<script src="//34.134.251.210/js/battledata.js?0.9692932719172624"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.2081456386569176"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.6577349179636136"></script>
	<script src="//34.134.251.210/data/graphics.js?0.6327973887511316"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.9278347362283454"></script>
	<script src="//34.134.251.210/data/items.js?0.5488868658329564"></script>
	<script src="//34.134.251.210/data/moves.js?0.32681753611389674"></script>
	<script src="//34.134.251.210/data/abilities.js?0.1256667370950566"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.7260861147099131"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.728698866105737"></script>
	<script src="//34.134.251.210/js/battle.js?0.7637663785916813"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
