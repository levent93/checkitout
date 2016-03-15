
<!-- Sadrzaj START -->	

<div class="col-sm-9">
	<?php foreach ($tabela as $red) : ?>
		<div class="col-sm-4">
			<div class="thumbnail">
				<?php
				if (!file_exists("manje_slike/" . $red->slika)) :
					$thumb = imagecreatetruecolor(320, 180);
					$slika = imagecreatefromjpeg($red->slika);
					imagecopyresampled($thumb, $slika, 0, 0, 0, 0, 320, 180, 2000, 1130);
					imagejpeg($thumb, "manje_slike/" . $red->slika, 100);
					imagedestroy($thumb);
					imagedestroy($slika);
				endif;
				?>
				<img src="<?php echo base_url() . "manje_slike/$red->slika"; ?>" alt=""/>
				<div class="caption">
					<h3><?php echo $red->naziv; ?></h3>
					<p>$ <?php echo $red->cena; ?>,00</p>
					<p>
						<?php
						$attributes = array(
							'class' => 'btn btn-default',
							'role' => 'button'
						);
//						echo anchor('proizvod/index/' . $red->id, 'Pogledaj', $attributes);
						?>
						<a href="#" class="btn btn-primary" role="button">
							<i class="fa fa-lg fa-shopping-cart"></i>
						</a>
					</p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<?php
	if (isset($links)) {
		echo $links;
	}
	?>
</div>

<div class="row">
	<div class="col-sm-3">
		<?php foreach ($ankete as $anketa) : ?>
			<div class="well text-center" id="<?php echo $anketa->id; ?>">
				<h4><?php echo $anketa->naziv; ?></h4>
				<?php foreach ($odgovori as $odgovor) : ?>
					<?php if ($odgovor->anketa_id == $anketa->id) : ?>
						<div class="row">
							<div class="col-xs-3">
								<button class="btn btn-xs anketa" name="<?php echo $anketa->id; ?>" id="<?php echo $odgovor->id; ?>">
									<i class="fa fa-lg fa-<?php echo $odgovor->odgovor; ?>"></i>
									<?php echo $odgovor->odgovor; ?>
								</button>
							</div>
							<div class="col-xs-9">
								<div class="progress">
									<div id="<?php echo $odgovor->id; ?>-response" class="progress-bar" role="progressbar"></div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	</div>

</div>

<!-- Row END -->
