//<?php
/**
 * ddRunSnippets
 * @version 1.1.1 (2024-07-30)
 * 
 * @see README.md
 * 
 * @copyright 2023–2024 Ronef {@link https://Ronef.me }
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
		$modx->getConfig('base_path')
		. 'assets/snippets/ddRunSnippets/require.php'
	);
	
	$cacheObject = new \ddRunSnippets\Cache();
	
	$cacheObject->clearCache([
		'resourceId' => \DDTools\ObjectTools::getPropValue([
			'object' => $modx->Event,
			'propName' => 'params.id',
		]),
	]);
}
//?>