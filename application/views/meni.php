
<table id="meni" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Naziv</th>
			<th>Putanja</th>
			<th>Ima podmeni</th>
			<th>Nadmeni</th>
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
					<td><?php echo $red->id; ?></td>
					<td>
						<?php
						$data = array(
							'name' => 'naziv',
							'id' => 'naziv',
							'class' => 'form-control input-sm',
							'placeholder' => 'Naziv',
							'form' => 'izmena',
							'value' => $red->naziv
						);
						echo form_input($data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'putanja',
							'id' => 'putanja',
							'class' => 'form-control input-sm',
							'placeholder' => 'Putanja',
							'form' => 'izmena',
							'value' => $red->putanja
						);
						echo form_input($data);
						?>
					</td>
					<td>
						<?php
						$options = array(
							'1' => 'Da',
							'0' => 'Ne'
						);
						$data = array(
							'class' => 'form-control input-sm',
							'form' => 'izmena'
						);
						echo form_dropdown('ima_podmeni', $options, $red->ima_podmeni, $data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'id_nadmeni',
							'id' => 'id_nadmeni',
							'class' => 'form-control input-sm',
							'placeholder' => 'Id nadmeni',
							'form' => 'izmena',
							'value' => $red->id_nadmeni
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
						<button class="btn btn-xs btn-link" onclick="vrati_podatke('meni', '');">
							<i class="fa fa-times fa-lg"></i>
						</button>
					</td>
					<?php echo form_close(); ?>
				</tr>
			<?php else : ?>
				<tr>
					<td><?php echo $red->id; ?></td>
					<td><?php echo $red->naziv; ?></td>
					<td><?php echo $red->putanja; ?></td>
					<td><?php echo ($red->ima_podmeni) ? 'Da' : 'Ne'; ?></td>
					<td><?php echo $tabela[$red->id_nadmeni]->naziv; ?></td>
					<td><?php echo $red->izmenio; ?></td>
					<td><?php echo date('d.m.y h a', $red->vreme_izmene); ?></td>
					<td>
						<button id="<?php echo $red->id; ?>" onclick="vrati_podatke('meni', this.id);" class="btn btn-xs btn-link">
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
				'name' => 'dodavanje'
			);
			echo form_open('', $attributes);
			?>
			<td><?php echo $red->id; ?></td>
			<td>
				<?php
				$data = array(
					'name' => 'naziv',
					'id' => 'naziv',
					'class' => 'form-control input-sm',
					'placeholder' => 'Naziv',
					'value' => '',
					'form' => 'dodavanje'
				);
				echo form_input($data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'putanja',
					'id' => 'putanja',
					'class' => 'form-control input-sm',
					'placeholder' => 'Putanja',
					'form' => 'dodavanje',
					'value' => ''
				);
				echo form_input($data);
				?>
			</td>
			<td>
				<?php
				$options = array(
					'1' => 'Da',
					'0' => 'Ne'
				);
				$data = array(
					'class' => 'form-control input-sm',
					'form' => 'dodavanje'
				);
				echo form_dropdown('ima_podmeni', $options, '0', $data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'id_nadmeni',
					'id' => 'id_nadmeni',
					'class' => 'form-control input-sm',
					'placeholder' => 'Id nadmeni',
					'form' => 'dodavanje',
					'value' => ''
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
