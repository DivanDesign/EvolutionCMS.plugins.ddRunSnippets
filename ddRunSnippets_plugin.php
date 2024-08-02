//<?php
/**
 * ddRunSnippets
 * @version 1.1.2 (2024-08-02)
 * 
 * @see README.md
 * 
 * @copyright 2023–2024 https://Ronef.me
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
	
	\DDTools\Tools\Cache::delete([
		'resourceId' => \DDTools\ObjectTools::getPropValue([
			'object' => $modx->Event,
			'propName' => 'params.id',
		]),
	]);
}
//?>