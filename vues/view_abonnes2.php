<section>
				<table>
								<tr><th>Nom</th><th>Prénom</th><th>Téléphone</th></tr>
								<?php foreach ($tListe as $liste) : ?>
												<tr>
																<td><?php echo $liste[0] ?></td>
																<td><?php echo $liste[1] ?></td>
																<td><?php echo implode("-", str_split(trim($liste[2]), 2)) ?></td>
												</tr>
								<?php endforeach; ?>
					</table>
</section>
