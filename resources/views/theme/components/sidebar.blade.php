<div class="main-content-wrap d-flex flex-column">
    <div class="side-content-wrap">
        <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item active">
                <a class="nav-item-hold" href="{{ route('/') }}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            @hasrole('admin|owner|staff')
            <li class="nav-item" data-item="clients">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">Clients</span>
                </a>
                <div class="triangle"></div>
            </li>
            @endhasrole
            @hasrole('admin|owner|staff|driver')
            <li class="nav-item" data-item="requisitions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">Requisitions</span>
                </a>
                <div class="triangle"></div>
            </li>
            @endhasrole
            @hasrole('admin|owner|staff')
            <li class="nav-item" data-item="users">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Users</span>
                </a>
                <div class="triangle"></div>
            </li>
            @endhasrole


        </ul>
    </div>
        <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="{{ asset('images/tl_logo.png') }}" alt="">
            </div>
        </header>

        <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6>Dashboard</h6>
                <p>Dashboard Menu</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('/') }}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="submenu-area" data-parent="clients">
            <header>
                <h6>Clients</h6>
                <p>Client Menu</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('clients')  }}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Client List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('clients.create') }}">
                        <i class="nav-icon i-Split-Vertical"></i>
                        <span class="item-name">Create Client</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="requisitions">
            <header>
                <h6>Requisitions</h6>
                <p>Requisition Menu</p>
            </header>
            <ul class="childNav">
                @hasrole('admin|owner|staff|driver')
                <li class="nav-item">
                    <a href="{{ route('requisitions') }}">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">View Requisitions</span>
                    </a>
                </li>
                @endhasrole
                @hasrole('admin|owner|staff')
                <li class="nav-item">
                    <a href="{{ route('requisitions.create') }}">
                        <i class="nav-icon i-Email"></i>
                        <span class="item-name">Add Requisition</span>
                    </a>
                </li>
                @endhasrole
            </ul>
        </div>
        <div class="submenu-area" data-parent="users">
            <header>
                <h6>Users</h6>
                <p>User Menu</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{ route('users') }}">
                        <i class="nav-icon i-Find-User"></i>
                        <span class="item-name">View Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.create') }}">
                        <i class="nav-icon i-Add-User"></i>
                        <span class="item-name">Add User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="ladda.button.html">
                        <i class="nav-icon i-Checked-User"></i>
                        <span class="item-name">User Roles</span>
                    </a>
                </li>

            </ul>
        </div>

    </div>
    </div>
