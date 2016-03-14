			
<!-- Main menu START -->
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<i class="fa fa-bars fa-lg"></i>
			</button>
			<?php
			$attributes = array(
				'class' => 'navbar-brand'
			);
			echo anchor('', '<i class="fa fa-shopping-bag fa-lg"></i>&nbsp; check IT out', $attributes);
			?>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<?php
				foreach ($meni as $link) :
					if ($link->ima_podmeni == 1) :
						?>
						<li class="dropdown">
							<?php
							$attributes = array(
								'class' => 'dropdown-toggle',
								'data-toggle' => 'dropdown'
							);
							echo anchor($link->putanja, $link->naziv . '<span class="caret"></span>', $attributes);
							?>
							<ul class="dropdown-menu">
								<?php
								foreach ($meni as $podlink) :
									if ($podlink->id_nadmeni == $link->id) :
										?>
										<li><?php echo anchor($podlink->putanja, $podlink->naziv); ?></li>
									<?php endif; ?>
								<?php endforeach; ?>
							</ul>
						</li>
					<?php elseif ($link->id_nadmeni == 0) : ?>
						<li><?php echo anchor($link->putanja, $link->naziv); ?></li>
						<?php
					endif;
				endforeach;
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->ime === '' OR $this->session->ime === NULL) : ?>
					<li>
						<?php echo anchor('prijava/prijavi', '<i class="fa fa-sign-in fa-lg"></i> Prijavi se'); ?>
					</li>
				<?php else : ?>
					<li>
						<?php echo anchor($this->session->uloga, '<i class="fa fa-cogs fa-lg"></i> ' . $this->session->uloga); ?>
					</li>
					<li>
						<?php echo anchor('prijava/odjavi', '<i class="fa fa-sign-out fa-lg"></i> Odjavi se'); ?>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>
<!-- Main menu END -->

<!-- Content Start -->
<div class="container">
