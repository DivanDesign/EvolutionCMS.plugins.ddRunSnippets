# (MODX)EvolutionCMS.plugins.ddRunSnippets

A plugin for [(MODX)EvolutionCMS.snippets.ddRunSnippets](https://github.com/DivanDesign/EvolutionCMS.snippets.ddRunSnippets).


## Requires

* PHP >= 7.4
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.4
* [(MODX)EvolutionCMS.libraries.ddTools](https://github.com/DivanDesign/EvolutionCMS.libraries.ddTools) >= 0.59
* [(MODX)EvolutionCMS.snippets.ddRunSnippets](https://github.com/DivanDesign/EvolutionCMS.snippets.ddRunSnippets) >= 4.1


## Installation


### Manually

Elements → Plugins: Create a new snippet with the following data

1. Plugin name: `ddRunSnippets`.
2. Description: `<b>1.0</b> A plugin for (MODX)EvolutionCMS.snippets.ddRunSnippets.`.
3. Category: `Core`.
4. Parse DocBlock: `no`.
5. Plugin code (php): Insert content of the `ddRunSnippets_plugin.php` file from the archive.
6. System events:
	1. `OnCacheUpdate`.
	2. `OnDocFormDelete`.
	3. `OnDocFormSave`.


### Using [(MODX)EvolutionCMS.libraries.ddInstaller](https://github.com/DivanDesign/EvolutionCMS.libraries.ddInstaller)

Just run the following PHP code in your sources or [Console](https://github.com/vanchelo/MODX-Evolution-Ajax-Console):

```php
//Include (MODX)EvolutionCMS.libraries.ddInstaller
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddInstaller/require.php'
);

//Install (MODX)EvolutionCMS.plugins.ddRunSnippets
\DDInstaller::install([
	'url' => 'https://github.com/DivanDesign/EvolutionCMS.plugins.ddRunSnippets',
	'type' => 'plugin'
]);
```

* If `ddRunSnippets` is not exist on your site, `ddInstaller` will just install it.
* If `ddRunSnippets` is already exist on your site, `ddInstaller` will check it version and update it if needed.


## Links

* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-ddrunsnippets)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ddRunSnippets)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />