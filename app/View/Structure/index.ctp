<H1>Structures</H1>
<p>Page de gestion des structures</p>


<?php
	echo $this->Form->create('Structure'); 
	echo $this->Form->input('nom_court', array('label' => 'Votre recherche : &nbsp', 'placeholder' => 'Nom de la structure'));
	echo $this->Form->end('Rechercher'); 
?>
<br><br>
<p><a class="btn btn-primary btn-lg" role="button" href="add">Ajouter une structure &raquo;</a></p>