 <!-- Sidebar user panel (optional) -->
 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('Plantilla/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Tablero -->
      <li class="nav-item">
        <a href="{{route('dashboard')}}" class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Tablero
            <i class="right fas"></i>
          </p>
        </a>
      </li>

      <!-- Catálogos Raíz -->
      <li class="nav-item {{request()->routeIs('categoria', 'linea', 'marca', 'familia', 'viewCentroCosto') ? 'menu-open' : ''}}">
        <a href="" class="nav-link {{request()->routeIs('categoria', 'linea', 'marca', 'familia', 'viewCentroCosto') ? 'active' : ''}}">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Catálogos
            <i class="right fas fa-angle-left right"></i>
          </p>
        </a>
        <!-- Ventas Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="fas fa-cash-register nav-icon"></i>
              <p>
                Ventas
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> 
                    Clientes 
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Clientes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Segmento</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sectores</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Rutas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Giros Comerciales</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Punto de Venta
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Caja Registradora</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cajeros</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Motivo de Cancelación</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Causas
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Causa de Rechazo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Causa de Devolución</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Compras Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="fas fa-money-bill nav-icon"></i>
              <p>
                Compras
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> 
                    Proveedor
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Tipo de Proveedor
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Grupo de Proveedor
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Comprador
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Causa de devolución
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Reportes
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Inventarios Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'menu-open' : ''}}">
            <a href="" class="nav-link {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'active' : ''}}">
              <i class="fas fa-box-open nav-icon"></i>
              <p>
                Inventarios
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'menu-open' : ''}}">
                <a href="" class="nav-link {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'active' : ''}}">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> 
                    Productos
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Productos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a title="TX-CA013" href="{{route('categoria')}}" class="nav-link {{request()->routeIs('categoria') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Categoría</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a title="TX-CA013" href="{{route('linea')}}" class="nav-link {{request()->routeIs('linea') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Línea</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a title="TX-CA013" href="{{route('marca')}}" class="nav-link {{request()->routeIs('marca') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Marca</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a title="TX-CA013" href="{{route('familia')}}" class="nav-link {{request()->routeIs('familia') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Familia</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Unidad de Medidas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Almacenes
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Caja Registradora</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cajeros</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Motivo de Cancelación</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Máximos y Mínimos
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Causa de mermas
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Concepto de Inventario
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Reportes
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Finanzas Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item {{request()->routeIs('viewCentroCosto') ? 'menu-open' : ''}}">
            <a href="" class="nav-link {{request()->routeIs('viewCentroCosto') ? 'active' : ''}}">
              <i class="fas fa-chart-bar nav-icon"></i>
              <p>
                Finanzas
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p> 
                    Bancos
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Movimientos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Bancos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cuentas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Grupo de cuentas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Divisas
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Monedas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tipo de cambios</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Formas de Pago
                  </p>
                </a>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Condiciones de Pago
                  </p>
                </a>
              </li>

              <!-- Centro de Costos -->
              <!--Level 2-->
              <li class="nav-item {{request()->routeIs('viewCentroCosto') ? 'menu-open' : ''}}">
                <a href="" class="nav-link {{request()->routeIs('viewCentroCosto') ? 'active' : ''}}">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Control de Gastos
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Grupo Centro-Costo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a title="TX-CA039" href="{{route('viewCentroCosto')}}" class="nav-link {{request()->routeIs('viewCentroCosto') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Centro de Costos</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Recibos de Caja
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tipo de recibos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Relación forma de pago</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Conceptos
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Conceptos Cxc</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Conceptos Cxp</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!--Level 2-->
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>
                    Causa bonificación
                    <i class="right fas fa-angle-left right"></i>
                  </p>
                </a>

                <!--Level 3-->
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Clientes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Proveedores</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reportes</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>

        
      </li>

      <!-- Ventas Raíz -->
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-cart-plus"></i>
          <p>
            Ventas
            <i class="right fas fa-angle-left right"></i>
          </p>
        </a>
        <!-- Ventas Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Facturas
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Pedidos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Cotizaciones
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Cancelación SAT
              </p>
            </a>
          </li>
        </ul>

        <!-- Devoluciones Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Devoluciones
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 
                    Sin Factura
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Con Factura
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    De Ventas
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Reportes
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Vendedores Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Vendedores
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 
                    Vendedor
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Grupo de vendedor
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Reportes
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Distribuidores Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Distribuidores
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 
                    Distribuidor
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Grupo distribuidor
                  </p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Tipo distribuidor
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Reportes
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Tipos de contratos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
        </ul>

        
      </li>

      <!-- Compras Raíz -->
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-money-bill-wave"></i>
          <p>
            Compras
            <i class="right fas fa-angle-left right"></i>
          </p>
        </a>
        <!-- Ventas Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Compras
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Orden de compras
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Requisiciones
              </p>
            </a>
          </li>
        </ul>

        <!-- Compras Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Devolución Proveedor
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 
                    Sin Factura
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Con Factura
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Reportes
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Finanzas Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Indirectos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Resurtir Productos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
        </ul>

        
      </li>

      <!-- Inventario Raíz -->
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-box"></i>
          <p>
            Inventario
            <i class="right fas fa-angle-left right"></i>
          </p>
        </a>
        <!-- Ventas Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Movimientos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Transferencias
              </p>
            </a>
          </li>
        </ul>

        <!-- Compras Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Traspaso-Sucursales
                <i class="right fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Level 2 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 
                    Solicitud - Traspaso
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Envío - Traspaso
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Recepción - Traspaso
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Cierre - Traspaso
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Reportes
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Inventarios Level 1 -->
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Control de Mermas
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
        </ul>        
      </li>

        
      <!--Inventarios
      <li class="nav-item {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'menu-open' : ''}}">
        <a href="#" class="nav-link {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'active' : ''}}">
          <i class="nav-icon fas fa-box-open"></i>
          <p>
            Inventarios
          <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->routeIs('categoria', 'linea', 'marca', 'familia') ? 'active' : ''}}">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categoria')}}" class="nav-link {{request()->routeIs('categoria') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categoría</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('linea')}}" class="nav-link {{request()->routeIs('linea') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Línea</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('marca')}}" class="nav-link {{request()->routeIs('marca') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('familia')}}" class="nav-link {{request()->routeIs('familia') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Familia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unidad de Medidas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>
                Almacenes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacén</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grupo de almacén</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </li>-->




      







    </ul>
  </nav>
  <!-- /.sidebar-menu -->