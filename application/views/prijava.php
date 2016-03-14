
<div class="row">

	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Uloguj se</h3>
			</div>
			<div class="panel-body">
				<?php
				$attributes = array(
					'name' => 'forma_prijava',
					'id' => 'forma_prijava',
				);
				echo form_open('prijava/prijavi', $attributes);
				?>
				<?php
				$greska_ime = form_error('ime');
				$g_ime = (isset($g_ime)) ? $g_ime : '';
				?>
				<div class="form-group <?php echo ($greska_ime OR $g_ime) ? 'has-error has-feedback' : ''; ?>">
					<?php
					$data = array(
						'class' => 'control-label'
					);
					echo form_label('Korisnicko ime', 'ime', $data);
					$data = array(
						'name' => 'ime',
						'id' => 'ime',
						'placeholder' => 'Korisnicko ime',
						'value' => set_value('ime'),
						'class' => 'form-control',
						'autofocus' => 'autofocus'
					);
					echo form_input($data);
					?>
					<span class="<?php echo ($greska_ime OR $g_ime) ? 'glyphicon glyphicon-remove form-control-feedback' : ''; ?>" aria-hidden="true"></span>
					<span class="help-block"><?php echo $greska_ime . $g_ime; ?></span>
				</div>
				<?php
				$greska_lozinka = form_error('lozinka');
				$g_lozinka = (isset($g_lozinka)) ? $g_lozinka : '';
				?>
				<div class="form-group <?php echo ($greska_lozinka OR $g_lozinka) ? 'has-error has-feedback' : ''; ?>">
					<?php
					$data = array(
						'class' => 'control-label'
					);
					echo form_label('Lozinka', 'lozinka', $data);
					$data = array(
						'name' => 'lozinka',
						'id' => 'lozinka',
						'placeholder' => 'Lozinka',
						'value' => set_value('lozinka'),
						'class' => 'form-control'
					);
					echo form_password($data);
					?>
					<span class="<?php echo ($greska_lozinka OR $g_lozinka) ? 'glyphicon glyphicon-remove form-control-feedback' : ''; ?>" aria-hidden="true"></span>
					<span class="help-block"><?php echo $greska_lozinka . $g_lozinka; ?></span>
				</div>
				<div class="checkbox">
					<label>
						<?php
						$data = array(
							'name' => 'zapamti',
							'id' => 'zapamti',
							'value' => 'Zapamti me'
						);
						echo form_checkbox($data);
						?>Zapamti me
					</label>
				</div>
				<!--<button type="button" class="btn btn-default" data-dismiss="modal">Ne sada</button>-->
				<?php
				$data = array(
					'name' => 'uloguj',
					'id' => 'uloguj',
					'value' => 'Uloguj se',
					'class' => 'btn btn-primary pull-right',
				);
				echo form_submit($data);
				echo form_close();
				?>
			</div>
		</div>
	</div>

	<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Napravi profil</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>

</div>