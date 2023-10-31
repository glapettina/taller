<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<li class="active">
				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>
			</li>


			<?php

				if ($_SESSION["perfil"] == "Administrador") {
					
						echo '<li class="treeview">

								<a href="">

									<i class="fa fa-graduation-cap"></i>
									<span>Alumnos</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>

								</a>

								<ul class="treeview-menu">
				               
				                <li class="treeview">
				                  <a href="#"><i class="fa fa-circle-o"></i> Ciclo Básico
				                    <span class="pull-right-container">
				                      <i class="fa fa-angle-left pull-right"></i>
				                    </span>
				                  </a>
				                  <ul class="treeview-menu">
				                    <li><a href="1cb"><i class="fa fa-circle-o"></i> 1er. Año</a></li>
				                    <li><a href="2cb"><i class="fa fa-circle-o"></i> 2do. Año</a></li>
				                  </ul>
				                </li>

				                <li class="treeview">
				                  <a href="#"><i class="fa fa-circle-o"></i> C.S. Electro
				                    <span class="pull-right-container">
				                      <i class="fa fa-angle-left pull-right"></i>
				                    </span>
				                  </a>
				                  <ul class="treeview-menu">
				                    <li><a href="3ecs"><i class="fa fa-circle-o"></i> 1er. Año</a></li>
				                    <li><a href="4ecs"><i class="fa fa-circle-o"></i> 2do. Año</a></li>
				                    <li><a href="5ecs"><i class="fa fa-circle-o"></i> 3er. Año</a></li>
				                    <li><a href="6ecs"><i class="fa fa-circle-o"></i> 4to. Año</a></li>
				                  </ul>
				                </li>

				                <li class="treeview">
				                  <a href="#"><i class="fa fa-circle-o"></i> C.S. Alimentación
				                    <span class="pull-right-container">
				                      <i class="fa fa-angle-left pull-right"></i>
				                    </span>
				                  </a>
				                  <ul class="treeview-menu">
				                    <li><a href="3acs"><i class="fa fa-circle-o"></i> 1er. Año</a></li>                    
				                  </ul>
				                </li>

				              </ul>

							</li>';

				}

	

			?>

			<?php

				if ($_SESSION["perfil"] == "Administrador") {
					
					echo'<li>
						<a href="cursos">

							<i class="fa fa-address-card"></i>
							<span>Cursos</span>

						</a>
					</li>';

				}			

			?>


		<li class="treeview">
	          <a href="#">
	            <i class="fa fa-list"></i> <span>Notas</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">

						<?php

	              	if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "DocenteCB" || $_SESSION["perfil"] == "Preceptor") {
	            
	            echo '<li class="treeview">
	              <a href="#"><i class="fa fa-circle-o"></i> Ciclo Básico
	                <span class="pull-right-container">
	                  <i class="fa fa-angle-left pull-right"></i>
	                </span>
	              </a>
	              <ul class="treeview-menu">

	              	
	              		
											<li class="treeview">
			                  <a href="#"><i class="fa fa-circle-o"></i> Primer Año
			                    <span class="pull-right-container">
			                      <i class="fa fa-angle-left pull-right"></i>
			                    </span>
			                  </a>
			                  <ul class="treeview-menu">
			                    <li><a href="11cbtm"><i class="fa fa-circle-o"></i> 1ro. 1ra. TM</a></li>
			                    <li><a href="12cbtm"><i class="fa fa-circle-o"></i> 1ro. 2da. TM</a></li>
			                    <li><a href="11cbtt"><i class="fa fa-circle-o"></i> 1ro. 1ra. TT</a></li>
			                    <li><a href="12cbtt"><i class="fa fa-circle-o"></i> 1ro. 2da TT</a></li>
			                    <li><a href="13cbtt"><i class="fa fa-circle-o"></i> 1ro. 3ra. TT</a></li>
			                  </ul>
			                </li>

	              	

	                <li class="treeview">
	                  <a href="#"><i class="fa fa-circle-o"></i> Segundo Año
	                    <span class="pull-right-container">
	                      <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                  </a>
	                  <ul class="treeview-menu">
	                    <li><a href="21cbtm"><i class="fa fa-circle-o"></i> 2do. 1ra. TM</a></li>
	                    <li><a href="22cbtm"><i class="fa fa-circle-o"></i> 2do. 2da. TM</a></li>
	                    <li><a href="21cbtt"><i class="fa fa-circle-o"></i> 2do. 1ra. TT</a></li>
	                    <li><a href="22cbtt"><i class="fa fa-circle-o"></i> 2do. 2da. TT</a></li>
	                  </ul>
	                  
	                </li>

	                 

	              </ul>
	            </li>';

	            }
	                	                
	        ?>

	           <?php

	              		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "DocenteCSE" || $_SESSION["perfil"] == "Preceptor") {

	           	echo'<li class="treeview">
	              <a href="#"><i class="fa fa-circle-o"></i> Ciclo Superior E
	                <span class="pull-right-container">
	                  <i class="fa fa-angle-left pull-right"></i>
	                </span>
	              </a>
	              <ul class="treeview-menu">

	              	
	              			
	                
	                <li class="treeview">
	                  <a href="#"><i class="fa fa-circle-o"></i> Primer Año E
	                    <span class="pull-right-container">
	                      <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                  </a>
	                  <ul class="treeview-menu">
	                    <li><a href="11ecstm"><i class="fa fa-circle-o"></i> 1ro. 1ra. E TM</a></li>
	                    <li><a href="12ecstm"><i class="fa fa-circle-o"></i> 1ro. 2da. E TM</a></li>
        	            <li><a href="11ecstt"><i class="fa fa-circle-o"></i> 1ro. 1ra. E TT</a></li>	                  
	                  </ul>
	                </li>

	                <li class="treeview">
	                  <a href="#"><i class="fa fa-circle-o"></i> Segundo Año E
	                    <span class="pull-right-container">
	                      <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                  </a>
	                  <ul class="treeview-menu">
	                    <li><a href="21ecstv"><i class="fa fa-circle-o"></i> 2do. 1ra. E TV</a></li>
	                    <li><a href="22ecstv"><i class="fa fa-circle-o"></i> 2do. 2da. E TV</a></li>
	                  </ul>
	                  
	                </li>

	               	<li class="treeview">
	                  <a href="#"><i class="fa fa-circle-o"></i> Tercer Año E
	                    <span class="pull-right-container">
	                      <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                  </a>
	                  <ul class="treeview-menu">
	                    <li><a href="31ecstv"><i class="fa fa-circle-o"></i> 3ro. 1ra. E TV</a></li>
	                    <li><a href="32ecstv"><i class="fa fa-circle-o"></i> 3ro. 2da. E TV</a></li>
	                  </ul>
	                  
	                </li>

	               	<li class="treeview">
	                  <a href="#"><i class="fa fa-circle-o"></i> Cuarto Año E
	                    <span class="pull-right-container">
	                      <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                  </a>
	                  <ul class="treeview-menu">
	                    <li><a href="41ecstv"><i class="fa fa-circle-o"></i> 4to. 1ra. E TV</a></li>
	                    <li><a href="42ecstv"><i class="fa fa-circle-o"></i> 4to. 2da. E TV</a></li>
	                  </ul>
	                  
	                </li>

	              

	              </ul>
	            </li>';

	            }

	         ?>

	         <?php

	         if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "DocenteCSA" || $_SESSION["perfil"] == "Preceptor") {

	           	echo '<li class="treeview">
	              <a href="#"><i class="fa fa-circle-o"></i> Ciclo Superior A
	                <span class="pull-right-container">
	                  <i class="fa fa-angle-left pull-right"></i>
	                </span>
	              </a>
	              <ul class="treeview-menu">
	                
	                <li class="treeview">
	                  <a href="#"><i class="fa fa-circle-o"></i> Primer Año A
	                    <span class="pull-right-container">
	                      <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                  </a>
	                  <ul class="treeview-menu">
	                    <li><a href="11acstm"><i class="fa fa-circle-o"></i> 1ro. 1ra. A TM</a></li>
	                    <li><a href="11acstt"><i class="fa fa-circle-o"></i> 1ro. 1ra. A TT</a></li>
	                  </ul>
	                </li>

	              </ul>
	            </li>
	            
	          </ul>
        </li>';

          }

	         ?>


        <?php

        if ($_SESSION['perfil'] == "Administrador") {
        	
						echo '<li>
				
							<a href="usuarios">

								<i class="fa fa-users"></i>

								<span>Usuarios</span>

						</a>

					</li>';

        }



			?>

		</ul>

	</section>

</aside>