<?php

$blogPosts = [
	[
		'naslov' => 'Title 1',
		'sodrzina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quisquam dolor voluptatibus perferendis facere corporis sunt, id, et voluptates atque, inventore cum in aliquam. Natus ipsa, culpa! Dolore, temporibus, iure.'
	],
	[
		'naslov' => 'Title 2',
		'sodrzina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quisquam dolor voluptatibus perferendis facere corporis sunt, id, et voluptates atque, inventore cum in aliquam. Natus ipsa, culpa! Dolore, temporibus, iure.'
	],
	[
		'naslov' => 'Title 3',
		'sodrzina' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quisquam dolor voluptatibus perferendis facere corporis sunt, id, et voluptates atque, inventore cum in aliquam. Natus ipsa, culpa! Dolore, temporibus, iure.'
	]
];

// foreach ($blogPosts as $post) {
// 	echo '<h3>'.$post['naslov'].'</h3>';
// 	echo '<p>'.$post['sodrzina'].'</p>';
// }


?>

<?php foreach ($blogPosts as $post){ ?>
	<h2><?=$post['naslov']?></h2>
	<p><?=$post['sodrzina']?></p>
<?php } ?>