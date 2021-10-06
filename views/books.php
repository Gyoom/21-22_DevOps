<div id="contenu">
	<h2>Les Livres</h2>
	<p>Bienvenue sur la page des livres.</p>
	<table id="tableBalises">
		<thead>
			<tr>
				<th>Titre</th>
				<th>Auteur</th>
			</tr>
		</thead>
		<tbody>
		<?php for ($i=0;$i<count($books);$i++) { ?>
			<tr>
			<td><span class="html"><?php echo $books[$i]->getTitle() ?></span></td>
			<td><?php echo $books[$i]->getAuthor() ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div><!-- #contenu -->