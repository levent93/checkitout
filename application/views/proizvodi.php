			
<!--Carousel START-->
<div class="row">
	<div class="col-md-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php for ($i = 0; $i < 3; $i++) : ?>
					<div class="item <?php echo ($i == 0) ? 'active' : ''; ?>">
						<img src="<?php echo base_url() . $tabela[$i]->slika; ?>" alt="<?php echo $tabela[$i]->naziv; ?>">
						<div class="carousel-caption">
							<h3>
								<?php echo $tabela[$i]->naziv; ?>
							</h3>
							<p>
								<?php echo '$ ' . $tabela[$i]->cena; ?>
							</p>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<!--Carousel END-->

<!-- Sadrzaj START -->	

<div class="row">
	<div class="col-sm-3">

		<div class="well text-center" id="rezultati">
			<h4>Koji operativni sistem koristite?</h4>

			<div class="row">
				<div class="col-xs-2">
					<button class="btn btn-xs anketa" id="apple">
						<i class="fa fa-lg fa-apple"></i>
					</button>
				</div>
				<div class="col-xs-10">
					<div class="progress">
						<div id="apple-response" class="progress-bar" role="progressbar"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-2">
					<button class="btn btn-xs anketa" id="android">
						<i class="fa fa-lg fa-android"></i>
					</button>
				</div>
				<div class="col-xs-10">
					<div class="progress">
						<div id="android-response" class="progress-bar" role="progressbar"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-2">
					<button class="btn btn-xs anketa" id="windows">
						<i class="fa fa-lg fa-windows"></i>
					</button>
				</div>
				<div class="col-xs-10">
					<div class="progress">
						<div id="windows-response" class="progress-bar" role="progressbar"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-2">
					<button class="btn btn-xs anketa" id="linux">
						<i class="fa fa-lg fa-linux"></i>
					</button>
				</div>
				<div class="col-xs-10">
					<div class="progress">
						<div id="linux-response" class="progress-bar" role="progressbar"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
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
							echo anchor('proizvod/index/' . $red->id, 'Pogledaj', $attributes);
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

</div>

<!-- Row END -->
