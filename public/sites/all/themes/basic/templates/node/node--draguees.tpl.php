<article id="node-draguees">
	
	<?php if(!empty($title)):?>
		<h1 class="node-title"><?php print $titre?></h1>
	<?php endif;?>
	<br>
	<?php if(!empty($image)):?>
		<img class="node-img" src=<?php print $image;?>>
	<?php endif;?>
	<?php if(!empty($prix_entreprise) && !empty($prix_particulier) && !empty($poids) ):?>
		<ul style="list-style-type:none">
			<li class="prix-particulier"><?php print $prix_particulier;?></li>
			<li class="prix-entreprise"><?php print $prix_entreprise;?></li>
			<li class="poids"><?php print $poids;?></li>
		</ul>
	<?php endif;?>
	<?php if(!empty($description)):?>
		<p class="chocolat-description"><?php print $description;?></p>
	<?php endif;?>
	
</article>