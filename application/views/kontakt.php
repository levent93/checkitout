
<div class="row">
	<div class="col-sm-3">

	</div>

	<div class="col-sm-6">
		<?php if (isset($je_poslato) && $je_poslato == TRUE) : ?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Uspeh!</strong> Hvala Vam što se interesujete za naš sajt!
			</div>
		<?php endif; ?>
		<?php if (isset($je_poslato) && $je_poslato == FALSE) : ?>
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Upozorenje!</strong> E-mail nije poslat. Pokušajte ponovo.
			</div>
		<?php endif; ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Pošaljite nam svoje utiske, komentare, ...</h3>
			</div>
			<div class="panel-body">
				<?php
				$attributes = array(
					'name' => 'forma_kontakt',
					'id' => 'forma_kontakt',
				);
				echo form_open('kontakt/kontaktiraj', $attributes);
				?>
				<?php
				$greska_naslov = form_error('naslov');
				?>
				<div class="form-group <?php echo ($greska_naslov) ? 'has-error has-feedback' : ''; ?>">
					<?php
					$data = array(
						'class' => 'control-label'
					);
					echo form_label('Naslov poruke', 'naslov', $data);
					$data = array(
						'name' => 'naslov',
						'id' => 'naslov',
						'placeholder' => 'Poruka sa sajta check IT out',
						'value' => set_value('naslov'),
						'class' => 'form-control',
						'autofocus' => 'autofocus'
					);
					echo form_input($data);
					?>
					<span class="<?php echo ($greska_naslov) ? 'glyphicon glyphicon-remove form-control-feedback' : ''; ?>" aria-hidden="true"></span>
					<span class="help-block"><?php echo $greska_naslov ?></span>
				</div>
				<?php
				$greska_email = form_error('email');
				?>
				<div class="form-group <?php echo ($greska_email) ? 'has-error has-feedback' : ''; ?>">
					<?php
					$data = array(
						'class' => 'control-label'
					);
					echo form_label('Vaša e-mail adresa', 'email', $data);
					$data = array(
						'name' => 'email',
						'id' => 'email',
						'placeholder' => 'john.doe@example.com',
						'value' => set_value('email'),
						'class' => 'form-control'
					);
					echo form_input($data);
					?>
					<span class="<?php echo ($greska_email) ? 'glyphicon glyphicon-remove form-control-feedback' : ''; ?>" aria-hidden="true"></span>
					<span class="help-block"><?php echo $greska_email; ?></span>
				</div>
				<?php
				$greska_poruka = form_error('poruka');
				?>
				<div class="form-group <?php echo ($greska_poruka) ? 'has-error has-feedback' : ''; ?>">
					<?php
					$data = array(
						'class' => 'control-label'
					);
					echo form_label('Poruka koju želite da pošaljete', 'poruka', $data);
					$data = array(
						'name' => 'poruka',
						'id' => 'poruka',
						'placeholder' => 'Zanima me to i to...',
						'value' => set_value('poruka'),
						'class' => 'form-control',
						'rows' => '4'
					);
					echo form_textarea($data);
					?>
					<span class="<?php echo ($greska_poruka) ? 'glyphicon glyphicon-remove form-control-feedback' : ''; ?>" aria-hidden="true"></span>
					<span class="help-block"><?php echo $greska_poruka; ?></span>
				</div>
				<?php
				$data = array(
					'name' => 'posalji',
					'id' => 'posalji',
					'value' => 'Pošalji',
					'class' => 'btn btn-primary pull-right',
				);
				echo form_submit($data);
				echo form_close();
				?>
			</div>
		</div>
	</div>

</div>