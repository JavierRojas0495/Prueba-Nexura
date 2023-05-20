
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Pruebas De Desarrollo </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Modulos
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuario"
                    aria-expanded="true" aria-controls="collapseUsuario">
                    <i class="fas fa-user"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapseUsuario" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo De Usuarios:</h6>
                        <a class="collapse-item" href="<?php echo getUrl("Usuario", "Usuario", "crearUsuario"); ?>">Registrar Usuarios</a> 
                        <a class="collapse-item" href="<?php echo getUrl("Usuario", "Usuario", "listarUsuario"); ?>">Lista De Usuarios</a>
                    </div>
                </div>

            <!-- /.collapse -->

             <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAsignatura"
                    aria-expanded="true" aria-controls="collapseAsignatura">
                    <i class="fas fa-book"></i>
                    <span>Asignaturas</span>
                </a>
                <div id="collapseAsignatura" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo De Asignaturas:</h6>
                        <a class="collapse-item" href="<?php echo getUrl("Asignatura", "Asignatura", "registrarAsignatura"); ?>">Registrar Asignaturas</a> 
                        <a class="collapse-item" href="<?php echo getUrl("Asignatura", "Asignatura", "listarAsignaturas"); ?>">Lista De Asignaturas</a>
                    </div>
                </div> -->
            <!-- /.collapse -->

            
                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducto"
                    aria-expanded="true" aria-controls="collapseProducto">
                    <i class="fas fa-hamburger"></i>
                    <span>Productos</span>
                </a>
                <div id="collapseProducto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo De Productos:</h6>
                        <a class="collapse-item" href="<?php echo getUrl("Producto", "Producto", "crearProducto"); ?>">Registrar Productos</a> 
                        <a class="collapse-item" href="<?php echo getUrl("Producto", "Producto", "listarProductos"); ?>">Lista De Productos</a>
                    </div>
                </div> -->
            <!-- </li>

            <li class="nav-item"> -->
                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentaProductos"
                    aria-expanded="true" aria-controls="collapseVentaProductos">
                    <i class="fas fa-cash-register"></i>
                    <span>Ventas Productos</span>
                </a>
                <div id="collapseVentaProductos" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo De Ventas Prod: </h6>
                        <a class="collapse-item" href="<?php echo getUrl("Ventas", "Ventas", "tiendaVirtual"); ?>">Entrar A La Tienda</a>
                        <a class="collapse-item" href="<?php echo getUrl("Ventas", "Ventas", "listarVentasProductos"); ?>">Lista De Ventas</a>
                    </div>
                </div> -->

<!-- 
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentaUsers"
                    aria-expanded="true" aria-controls="collapseVentaUsers">
                    <i class="fas fa-address-card"></i>
                    <span>Ventas Asesores</span>
                </a>
                <div id="collapseVentaUsers" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo De Ventas:</h6>
                        <a class="collapse-item" href="<?php echo getUrl("Ventas", "Ventas", "registrarVentas"); ?>">Registrar Ventas</a>
                        <a class="collapse-item" href="<?php echo getUrl("Ventas", "Ventas", "vistaCalcularComisiones"); ?>">Calcular Comisiones</a>
                    </div>
                </div>


                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCargarArchivos"
                    aria-expanded="true" aria-controls="collapseCargarArchivos">
                    <i class="fas fa-address-card"></i>
                    <span>Guardar Archivos PDF</span>
                </a>
                <div id="collapseCargarArchivos" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo Cargue Archivos:</h6>
                        <a class="collapse-item" href="<?php echo getUrl("Archivos", "Archivos", "subirNuevoArchivo"); ?>"> Subir Nuevo PDF</a>
                        <a class="collapse-item" href="<?php echo getUrl("Archivos", "Archivos", "listarArchivos"); ?>">Listar PDF's</a>
                    </div>
                </div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProcesosEventos"
                    aria-expanded="true" aria-controls="collapseProcesosEventos">
                    <i class="fas fa-address-card"></i>
                    <span>Procesos Eventos</span>
                </a>
                <div id="collapseProcesosEventos" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo Procesos / Eventos:</h6>
                        <a class="collapse-item" href="<?php echo getUrl("Evento", "Evento", "crearEvento"); ?>"> Crear </a>
                        <a class="collapse-item" href="<?php echo getUrl("Evento", "Evento", "listarEvento"); ?>"> Listar </a>
                        <a class="collapse-item" href="<?php echo getUrl("Evento", "Evento", "listarEventosInforme"); ?>"> Buscar </a>
                    </div>
                </div> -->

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        