<?
return [
	'title' => 'Category',
	'single' => 'category',
	'model' => 'App\Category',
	'columns' => [
		
		'name',
		'description',
	],
	'edit_fields' => [
		
		'name' =>[
			'type' => 'text', 
		    'title' => 'Name:',
		    'limit' => 30, 
		],
		'description' =>[
			'type' => 'text', 
		    'title' => 'Description:',
		    'limit' => 100, 
		]
	]
];