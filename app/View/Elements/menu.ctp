<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meseros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php  echo $this->Html->link('Lista Meseros', array('controller' => 'meseros','action' => 'index'))  ?></li>
                <li><?php  echo $this->Html->link('Nuevo Mesero', array('controller' => 'meseros','action' => 'add'))  ?></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php  echo $this->Html->link('Lista Mesas', array('controller' => 'mesas','action' => 'index'))  ?></li>
                <li><?php  echo $this->Html->link('Nuevo Mesas', array('controller' => 'mesas','action' => 'add'))  ?></li>
              </ul>
            </li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contacto</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
 </nav>