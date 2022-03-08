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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.450400320557393" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.981393954030968" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3737170509309813" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.5211544195144306" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.51285318729741" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.5730632043350774" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6693695460668905"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9339587497388433" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.748442647902118">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9253583831785284">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.17903202709662436">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4653648985895733">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.4633708206974394"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.9170027875769486"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.37867557848112465"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.818760556944423"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.8841162115559442"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.38881889743516784"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8564200824526598"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.565814513914334"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.19008987923552745"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.9381122963258277"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.49936637251723903"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.40835093309523485"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5423790949981127"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6717323407758855"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.7602325546057842"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8280865822843042"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.430153667689231"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.7681459753196092"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.8036675932940487"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
