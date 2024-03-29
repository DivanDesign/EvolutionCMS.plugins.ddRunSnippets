//<?php
/**
 * ddRunSnippets
 * @version 1.1 (2022-05-04)
 * 
 * @see README.md
 * 
 * @copyright 2023 Ronef {@link https://Ronef.ru }
 */

global $modx;

if(
	isset($modx->Event) &&
	in_array(
		$modx->Event->name,
		[
			'OnDocFormSave',
			'OnDocFormDelete',
			'OnCacheUpdate',
		]
	)
){
	//Include (MODX)EvolutionCMS.snippets.ddRunSnippets
	require_once(
		$modx->getConfig('base_path') .
		'assets/snippets/ddRunSnippets/require.php'
	);
	
	$cacheObject = new \ddRunSnippets\Cache();
	
	$cacheObject->clearCache([
		'docId' => \DDTools\ObjectTools::getPropValue([
			'object' => $modx->Event,
			'propName' => 'params.id'
		])
	]);
}
//?>