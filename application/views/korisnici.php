
<table id="korisnici" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Korisnicko ime</th>
			<th>E-mail</th>
			<th>Uloga</th>
			<th>Uneo</th>
			<th>Dana</th>
			<th title="Izmena"><i class="fa fa-pencil fa-lg"></i></th>
			<th title="Brisanje"><i class="fa fa-trash-o fa-lg"></i></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tabela as $red) : ?>
			<?php if (isset($id) && $id == $red->id) : ?>
				<?php
				$attributes = array(
					'id' => 'izmena',
					'name' => 'izmena',
				);
				echo form_open('', $attributes);
				?>
				<tr>
					<td>
						<?php
						$data = array(
							'name' => 'ime',
							'id' => 'ime',
							'class' => 'form-control input-sm',
							'placeholder' => 'Korisnicko ime',
							'form' => 'izmena',
							'value' => $red->ime,
						);
						echo form_input($data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'email',
							'id' => 'email',
							'class' => 'form-control input-sm',
							'placeholder' => 'ime@gmail.com',
							'form' => 'izmena',
							'value' => $red->email,
						);
						echo form_input($data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'uloga_id',
							'id' => 'uloga_id',
							'class' => 'form-control input-sm',
							'placeholder' => 'Uloga',
							'form' => 'izmena',
							'value' => $red->uloga_id,
						);
						echo form_input($data);
						?>
					</td>
					<td><?php echo $red->izmenio; ?></td>
					<td><?php echo date('d.m.y h a', $red->vreme_izmene); ?></td>
					<td>
						<button id="<?php echo $red->id; ?>" class="btn btn-xs btn-link">
							<i class="fa fa-floppy-o fa-lg"></i>
						</button>
					</td>
					<td>
						<button class="btn btn-xs btn-link" onclick="vrati_podatke('korisnici', '');">
							<i class="fa fa-times fa-lg"></i>
						</button>
					</td>
					<?php echo form_close(); ?>
				</tr>
			<?php else : ?>
				<tr>
					<td><?php echo $red->ime; ?></td>
					<td><?php echo $red->email; ?></td>
					<td><?php echo $red->uloga_id; ?></td>
					<td><?php echo $red->izmenio; ?></td>
					<td><?php echo date('d.m.y h a', $red->vreme_izmene); ?></td>
					<td>
						<button id="<?php echo $red->id; ?>" onclick="vrati_podatke('korisnici', this.id);" class="btn btn-xs btn-link">
							<i class="fa fa-pencil fa-lg"></i>
						</button>
					</td>
					<td>
						<button id="<?php echo $red->id; ?>" class="btn btn-xs btn-link">
							<i class="fa fa-trash-o fa-lg"></i>
						</button>
					</td>
				</tr>
			<?php
			endif;
		endforeach;
		?>
		<tr>
			<?php
			$attributes = array(
				'id' => 'dodavanje',
				'name' => 'dodavanje',
			);
			echo form_open('', $attributes);
			?>
			<td>
				<?php
				$data = array(
					'name' => 'ime',
					'id' => 'ime',
					'class' => 'form-control input-sm',
					'placeholder' => 'Ime',
					'value' => '',
					'form' => 'dodavanje',
				);
				echo form_input($data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'e_mail',
					'id' => 'e_mail',
					'class' => 'form-control input-sm',
					'placeholder' => 'ime@gmail.com',
					'value' => '',
					'form' => 'dodavanje',
				);
				echo form_input($data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'id_uloga',
					'id' => 'id_uloga',
					'class' => 'form-control input-sm',
					'placeholder' => 'Id uloge',
					'value' => '',
					'form' => 'dodavanje',
				);
				echo form_input($data);
				?>
			</td>
			<td><?php echo $this->session->ime; ?></td>
			<td><?php echo date('d.m.y h a'); ?></td>
			<td>
				<button class="btn btn-xs btn-link">
					<i class="fa fa-floppy-o fa-lg"></i>
				</button>
			</td>
			<td>
				<button type="reset" class="btn btn-xs btn-link" form="dodavanje">
					<i class="fa fa-times fa-lg"></i>
				</button>
			</td>
		</tr>
		<?php echo form_close(); ?>
	</tbody>
</table>
