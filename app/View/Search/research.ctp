<h1>Faire une recherche</h1>

<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique !</p>

<?php
	echo $this->Form->create('structure'); 
	echo $this->Form->input('nom_court', array('label' => 'Votre recherche : &nbsp', 'placeholder' => 'votre recherche'));
	echo $this->Form->end('Rechercher'); 
?>