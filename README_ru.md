# (MODX)EvolutionCMS.plugins.ddRunSnippets

Плагин для [(MODX)EvolutionCMS.snippets.ddRunSnippets](https://github.com/DivanDesign/EvolutionCMS.snippets.ddRunSnippets).


## Использует

* PHP >= 7.4
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.4
* [(MODX)EvolutionCMS.libraries.ddTools](https://github.com/DivanDesign/EvolutionCMS.libraries.ddTools) >= 0.59
* [(MODX)EvolutionCMS.snippets.ddRunSnippets](https://github.com/DivanDesign/EvolutionCMS.snippets.ddRunSnippets) >= 4.1


## Установка


### Вручную

Элементы → Плагины: Создайте новый плагин со следующими параметрами

1. Название сниппета: `ddRunSnippets`.
2. Описание: `<b>1.1</b> Плагин для (MODX)EvolutionCMS.snippets.ddRunSnippets.`.
3. Категория: `Core`.
4. Анализировать DocBlock: `no`.
5. Код сниппета (php): Вставьте содержимое файла `ddRunSnippets_snippet.php` из архива.
6. Системные события:
	1. `OnCacheUpdate`.
	2. `OnDocFormDelete`.
	3. `OnDocFormSave`.


### Используя [(MODX)EvolutionCMS.libraries.ddInstaller](https://github.com/DivanDesign/EvolutionCMS.libraries.ddInstaller)

Просто вызовите следующий код в своих исходинках или модуле [Console](https://github.com/vanchelo/MODX-Evolution-Ajax-Console):

```php
//Подключение (MODX)EvolutionCMS.libraries.ddInstaller
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddInstaller/require.php'
);

//Установка (MODX)EvolutionCMS.plugins.ddRunSnippets
\DDInstaller::install([
	'url' => 'https://github.com/DivanDesign/EvolutionCMS.plugins.ddRunSnippets',
	'type' => 'plugin'
]);
```

* Если `ddRunSnippets` отсутствует на вашем сайте, `ddInstaller` просто установит его.
* Если `ddRunSnippets` уже есть на вашем сайте, `ddInstaller` проверит его версию и обновит, если нужно. 


## Ссылки

* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-ddrunsnippets)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ddRunSnippets)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />