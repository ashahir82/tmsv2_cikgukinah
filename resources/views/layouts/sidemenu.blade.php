<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset(Auth::user()->profile_img) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <!-- menu student -->
               @hasrole('superadmin')
                <li class="nav-item {{ (request()->route()->named('student.*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->route()->named('student.*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Students
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('student.index') }}"
                            class="nav-link {{ (request()->route()->named('student.index')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('student.create') }}"
                            class="nav-link {{ (request()->route()->named('student.create')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>

                 <!-- menu courses -->
                <li class="nav-item {{ (request()->route()->named('course.*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->route()->named('course.*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Courses
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('course.index') }}" class="nav-link {{ (request()->route()->named('course.index')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endhasrole

                <li class="nav-item {{ (request()->route()->named('user.*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->route()->named('user.*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link {{ (request()->route()->named('user.index')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.create') }}" class="nav-link {{ (request()->route()->named('user.create')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a  class="nav-link"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                            @csrf
                        </form>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
