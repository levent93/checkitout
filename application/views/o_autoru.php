
<table id="o_autoru" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Naslov</th>
			<th>Tekst</th>
			<th>Slika</th>
			<th>Uneo</th>
			<th>Dana</th>
			<th title="Izmena"><i class="fa fa-pencil fa-lg"></i></th>
			<th title="Brisanje"><i class="fa fa-trash-o fa-lg"></i></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tabela as $red) : ?>
			<?php if (isset($id) && $id == $red->id) : ?>
				<tr>
					<?php
					$attributes = array(
						'id' => 'izmena',
						'name' => 'izmena'
					);
					echo form_open('', $attributes);
					?>
					<td>
						<?php
						$data = array(
							'name' => 'naslov',
							'id' => 'naslov',
							'class' => 'form-control input-sm',
							'placeholder' => 'Naslov',
							'form' => 'izmena',
							'value' => $red->naslov
						);
						echo form_input($data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'tekst',
							'id' => 'tekst',
							'rows' => 4,
							'class' => 'form-control input-sm',
							'placeholder' => 'Neki tekst ovde',
							'form' => 'izmena',
							'value' => $red->tekst
						);
						echo form_textarea($data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'slika',
							'id' => 'slika',
							'class' => 'form-control input-sm',
							'placeholder' => 'Putanja do slike',
							'form' => 'izmena',
							'value' => $red->slika
						);
						echo form_input($data);
						?>
					</td>
					<td><?php echo $red->izmenio; ?></td>
					<td><?php echo date('d M H:i:s', $red->vreme_izmene); ?></td>
					<td>
						<button id="<?php echo $red->id; ?>" class="btn btn-xs btn-link">
							<i class="fa fa-floppy-o fa-lg"></i>
						</button>
					</td>
					<td>
						<button class="btn btn-xs btn-link" onclick="vrati_podatke('o_autoru', '');">
							<i class="fa fa-times fa-lg"></i>
						</button>
					</td>
					<?php echo form_close(); ?>
				</tr>
			<?php else : ?>
				<tr>
					<td><?php echo $red->naslov; ?></td>
					<td><?php echo $red->tekst; ?></td>
					<td><?php echo $red->slika; ?></td>
					<td><?php echo $red->ime; ?></td>
					<td><?php echo date('d.m.y h a', $red->vreme_izmene); ?></td>
					<td>
						<button id="<?php echo $red->id; ?>" onclick="vrati_podatke('o_autoru', this.id);" class="btn btn-xs btn-link">
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
					'name' => 'naslov',
					'id' => 'naslov',
					'class' => 'form-control input-sm',
					'placeholder' => 'Naslov',
					'value' => '',
					'form' => 'dodavanje'
				);
				echo form_input($data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'tekst',
					'id' => 'tekst',
					'class' => 'form-control input-sm',
					'rows' => 4,
					'placeholder' => 'Text',
					'value' => '',
					'form' => 'dodavanje'
				);
				echo form_textarea($data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'slika',
					'id' => 'slika',
					'class' => 'form-control input-sm',
					'placeholder' => 'Slika',
					'value' => '',
					'form' => 'dodavanje'
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
				<button type="reset" class="btn btn-xs btn-link"  form="dodavanje">
					<i class="fa fa-times fa-lg"></i>
				</button>
			</td>
		</tr>
		<?php echo form_close(); ?>
	</tbody>
</table>
