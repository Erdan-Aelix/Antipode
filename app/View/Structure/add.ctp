<h1>Ajouter une structure</h1>

<p>Formulaire d'ajout de structure</p>

<?php
	echo $this->Form->create('structure'); 
	echo $this->Form->input('nom_court', array('label' => 'Votre recherche : &nbsp', 'placeholder' => 'votre recherche'));
	echo $this->Form->end('Rechercher'); 
?>