<?
return [
	'title' => 'Posts',
	'single' => 'post',
	'model' => 'App\Post',
	'columns' => [
		'id',
		'title',
		'img' =>[
			'title' => 'Image',
        	'output' => '<img src="(:value)" height="100" />',
		],
		'description',
		'content',
		'category_id'
	],
	'edit_fields' => [
		'title' => [
			'type' => 'text',
			'title' => 'Title',
			'limit' => 100,
		],
		'image' => [
			'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/img/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 2,
    		'sizes' => array(
		        array(900, 300, 'auto', public_path() . '/img/', 100),
    		)
		],
		'description' =>[
			'type' => 'textarea',
		    'title' => 'Description',
		    'limit' => 300, //optional, defaults to no limit
		    'height' => 130, //optional, defaults to 100
		],
		'content'=>[
			'type' => 'wysiwyg',
    		'title' => 'Content',
		],
		'category_id' =>[
			'type' => 'number', //optional...Administrator will know when a field is the model's key
    		'title' => 'Category_ID',
		],
	]
];