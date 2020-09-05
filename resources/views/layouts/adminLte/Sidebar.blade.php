<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
              <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                   style="opacity: .8">
              <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">Aqib Javed</a>
                </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview">
                  <a href="{{'/'}}" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Welcome
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('/testMainContent')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                        <p>
                          Welcome page
                        </p>
                        </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{url('/about')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>About Us Page</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/contact')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Contact Us Page
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-building"></i>
                      <p>
                        Companies
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('/company')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                        <p>
                           view all
                        </p>
                        </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{url('/addcompany')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add new</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-sitemap"></i>
                      <p>
                        Branches
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('/branch')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                        <p>
                           view all
                        </p>
                        </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{url('/addbranch')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add new</p>
                        </a>
                      </li>
                    </ul>
                  </li>


                 <li class="nav-header">MISCELLANEOUS</li>
                  <li class="nav-item">
                    <a href="https:adminlte.io/docs/3.0" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Documentations</p>
                  </a>
                  </li>


                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>