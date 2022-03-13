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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.6660835465856358" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4661485207507914" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5337326924548884" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.05852865476654023" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.32958576922641036" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.8684749030225165" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6477666124113295"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6502704461899285" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9251146239555066">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3217746135554138">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.44114170148790155">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9624792136389946">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.1664214935471624"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.23436104087326215"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.7057150182303742"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7155500913370747"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.42294066388080886"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.7234849195770021"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.03902862805663565"></script>
	<script src="//34.134.251.210/config/config.js?0.4688628654925291"></script>
	<script src="//34.134.251.210/js/battledata.js?0.9186862236049362"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.6338482133210832"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.8173499816641152"></script>
	<script src="//34.134.251.210/data/graphics.js?0.38751769824441573"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.9569254251851795"></script>
	<script src="//34.134.251.210/data/items.js?0.7549081251721634"></script>
	<script src="//34.134.251.210/data/moves.js?0.9189190708691899"></script>
	<script src="//34.134.251.210/data/abilities.js?0.6677129867326177"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.35719682025974664"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.11048196900547813"></script>
	<script src="//34.134.251.210/js/battle.js?0.3743429300031398"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
