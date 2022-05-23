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
	<link rel="stylesheet" href="//34.134.251.210/style/font-awesome.css?0.5712398243756152" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.42452751374059905" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9919831768565035" />
	<link rel="stylesheet" href="//34.134.251.210/style/battle.css?0.06139714965087517" />
	<link rel="stylesheet" href="//34.134.251.210/style/replay.css?0.6744751180217081" />
	<link rel="stylesheet" href="//34.134.251.210/style/utilichart.css?0.022251683607062533" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8696909508369939"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.457692942693777" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10188933536564826">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.96509356432647">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.15458485977363146">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.08038017343121862">Forum</a></li>
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
	<script src="//34.134.251.210/js/lib/jquery-1.11.0.min.js?0.36055641588678533"></script>
	<script src="//34.134.251.210/js/lib/lodash.core.js?0.8698944553905505"></script>
	<script src="//34.134.251.210/js/lib/backbone.js?0.461293096150309"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9282125556949836"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//34.134.251.210/js/lib/jquery-cookie.js?0.537829645981011"></script>
	<script src="//34.134.251.210/js/lib/html-sanitizer-minified.js?0.7465034551760903"></script>
	<script src="//34.134.251.210/js/battle-sound.js?0.9678954786832703"></script>
	<script src="//34.134.251.210/config/config.js?0.34713960439539626"></script>
	<script src="//34.134.251.210/js/battledata.js?0.3844552996782058"></script>
	<script src="//34.134.251.210/data/pokedex-mini.js?0.23354482719884806"></script>
	<script src="//34.134.251.210/data/pokedex-mini-bw.js?0.1648189367616597"></script>
	<script src="//34.134.251.210/data/graphics.js?0.9420273158770116"></script>
	<script src="//34.134.251.210/data/pokedex.js?0.3454476014995689"></script>
	<script src="//34.134.251.210/data/items.js?0.9448727782083264"></script>
	<script src="//34.134.251.210/data/moves.js?0.9602208567615942"></script>
	<script src="//34.134.251.210/data/abilities.js?0.6896394140750406"></script>
	<script src="//34.134.251.210/data/teambuilder-tables.js?0.5621671428510862"></script>
	<script src="//34.134.251.210/js/battle-tooltips.js?0.1737819999016159"></script>
	<script src="//34.134.251.210/js/battle.js?0.6202397632269767"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
