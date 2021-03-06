<div class="container">
	<div class="row" style="margin-top:50px">
		<div class="col-md-6">
			<?php echo $this->Form->create('Mesero', array('role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Nuevo Mesero'); ?></h2>
				<?php
					echo $this->Form->input('dni', array('class' => 'form-control', 'label' => 'Rut'));
					echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
					echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellido'));
					echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Teléfono'));
				?>
				</fieldset>

				<p>
				<?php echo $this->Form->end(array('label' => 'Crear Mesero', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Acciones'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Lista Meseros'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
			    <li><?php echo $this->Html->link(__('Lista Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?></li>
			    <li><?php echo $this->Html->link(__('Nueva Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>
