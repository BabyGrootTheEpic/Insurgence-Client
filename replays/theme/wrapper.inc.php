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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.37001712112905794" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9981478159223638" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.517441528515862" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.13608292916609788" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.3161488726294286" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.9700688768337162" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7839427441529263"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.2766478612109855" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2933214630270875">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24557616706337582">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9589136246112133">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7168140989452669">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.1209516953911991"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.42834171876900085"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.08825640649362954"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.968650168174447"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.783790846254256"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.5491952541194798"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.40002741028475897"></script>
	<script src="//34.134.251.210/config/config.js?0.75839449876807"></script>
	<script src="//34.134.251.210/js/battledata.js?0.10432764840416175"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.7569331048673669"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.6005122972567865"></script>
	<script src="//34.134.251.210/data/graphics.js?0.6944366589810291"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.0016372390508441192"></script>
	<script src="//34.134.251.210/data/items.js?0.35489439008204116"></script>
	<script src="//34.134.251.210/data/moves.js?0.33244276776488"></script>
	<script src="//34.134.251.210/data/abilities.js?0.18593408183690818"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.10808627361291068"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.6769989251574604"></script>
	<script src="//34.134.251.210/js/battle.js?0.20223790646151674"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
