
<div class="jumbotron">
	<h1><?php echo $tabela[0]->naslov; ?></h1>
	<p class="lead">
		<?php echo $tabela[0]->tekst; ?>
	</p>
</div>

<!-- Row START -->

<div class="row text-center">

	<?php for ($i = 1; $i < count($tabela); $i++) : ?>
		<div class="col-sm-4">
			<img data-holder-rendered="true" src="<?php echo base_url() . $tabela[$i]->slika; ?>" style="width: 250px; height: 250px;" data-src="holder.js/250x250" class="img-circle" alt="">
			<h3><?php echo $tabela[$i]->naslov; ?></h3>
			<p><?php echo $tabela[$i]->tekst; ?></p>
		</div>
	<?php endfor; ?>
</div>