<div class="container">
	<div class="row" style="margin-top:50px">
		<div class="col-md-6">
			<?php echo $this->Form->create('Mesero', array('role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Editar Mesero'); ?></h2>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('dni', array('class' => 'form-control', 'label' => 'Rut'));
					echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
					echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellido'));
					echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Teléfono'));
				?>
				</fieldset>
				<p>
					<?php echo $this->Form->end(array('label' => 'Editar Mesero', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Mesero.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mesero.id'))); ?></li>
				<li><?php echo $this->Html->link(__('Lista Meseros'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
				<li><?php echo $this->Html->link(__('Lista Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Nueva Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>

