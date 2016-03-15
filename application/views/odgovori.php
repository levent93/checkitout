
<table id="odgovori" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Ponudjeni odgovor</th>
			<th>Iz ankete</th>
			<th>Broj glasova</th>
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
							'name' => 'odgovor',
							'id' => 'odgovor',
							'class' => 'form-control input-sm',
							'placeholder' => 'Odgovor',
							'form' => 'izmena',
							'value' => $red->odgovor
						);
						echo form_input($data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'anketa_id',
							'id' => 'anketa_id',
							'class' => 'form-control input-sm',
							'placeholder' => 'Anketa id',
							'form' => 'izmena',
							'value' => $red->anketa_id
						);
						echo form_input($data);
						?>
					</td>
					<td>
						<?php
						$data = array(
							'name' => 'glasovi',
							'id' => 'glasovi',
							'class' => 'form-control input-sm',
							'placeholder' => 'Glasovi',
							'form' => 'izmena',
							'value' => $red->glasovi,
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
						<button class="btn btn-xs btn-link" onclick="vrati_podatke('odgovori', '');">
							<i class="fa fa-times fa-lg"></i>
						</button>
					</td>
					<?php echo form_close(); ?>
				</tr>
			<?php else : ?>
				<tr>
					<td><?php echo $red->odgovor; ?></td>
					<td><?php echo $red->anketa_id; ?></td>
					<td><?php echo $red->glasovi; ?></td>
					<td><?php echo $red->ime; ?></td>
					<td><?php echo date('d.m.y h a', $red->vreme_izmene); ?></td>
					<td>
						<button id="<?php echo $red->id; ?>" onclick="vrati_podatke('odgovori', this.id);" class="btn btn-xs btn-link">
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
			<td>
				<?php
				$data = array(
					'name' => 'odgovor',
					'id' => 'odgovor',
					'class' => 'form-control input-sm',
					'placeholder' => 'Odgovor',
					'value' => '',
					'form' => 'dodavanje'
				);
				echo form_input($data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'anketa_id',
					'id' => 'anketa_id',
					'class' => 'form-control input-sm',
					'placeholder' => 'Anketa id',
					'value' => '',
					'form' => 'dodavanje'
				);
				echo form_input($data);
				?>
			</td>
			<td>
				<?php
				$data = array(
					'name' => 'glasovi',
					'id' => 'glasovi',
					'class' => 'form-control input-sm',
					'placeholder' => 'Broj glasova',
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
