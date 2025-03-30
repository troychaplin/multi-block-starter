<?php
// This file is generated. Do not modify it manually.
return array(
	'dynamic-block-example' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'multi-block-starter/dynamic-block-example',
		'version' => '0.1.0',
		'title' => 'Dynamic Block Example',
		'category' => 'text',
		'icon' => 'wordpress',
		'description' => 'Example of a dynamic block loaded via a single compiled asset in the block editor.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'multi-block-starter',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'interactive-block-example' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'multi-block-starter/interactive-block-example',
		'version' => '0.1.0',
		'title' => 'Interactive Block Example',
		'category' => 'text',
		'icon' => 'wordpress',
		'description' => 'Example of an interactive block.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'multi-block-starter',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	),
	'static-block-example' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'multi-block-starter/static-block-example',
		'version' => '0.1.0',
		'title' => 'Static Block Example',
		'category' => 'text',
		'icon' => 'wordpress',
		'description' => 'Example of a static block loaded via a single compiled asset in the block editor.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'multi-block-starter',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
