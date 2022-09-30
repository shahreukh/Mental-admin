<!-- Admin Sidebar -->
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <!-- Dashboard -->
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':''}}" href="{{ url('admin/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
    <!--
                <div class="sb-sidenav-menu-heading">Interface</div>
                
                <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'show active':''}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-category') ? 'active':''}}" href="{{ url('admin/add-category')}}">Add Category</a>
                        <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/edit-category/*') ? 'active':''}}" href="{{ url('admin/category')}}">View Category</a>
                    </nav>
                </div>
                
                <a class="nav-link {{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/post/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/post/*') ? 'show active':''}}" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-post') ? 'active':''}}" href="{{ url('admin/add-post')}}">Add Posts</a>
                        <a class="nav-link {{ Request::is('admin/posts') || Request::is('admin/post/*') ? 'active':''}}"  href="{{ url('admin/posts')}}">View Posts</a>
                    </nav>
                </div>
    -->
                <!-- Home Page -->
                <div class="sb-sidenav-menu-heading">Home Page</div>
                <!-- Project Catagories -->
                <a class="nav-link {{ Request::is('admin/corporate') || Request::is('admin/add-corporate') || Request::is('admin/edit-corporate/*') ? 'collapse active':'collapsed'}} " href="#" data-bs-toggle="collapse" data-bs-target="#collapseCorporate" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check"></i></div>
                        Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/corporate') || Request::is('admin/add-corporate') || Request::is('admin/edit-corporate/*') ? 'show active':''}}" id="collapseCorporate" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-corporate') ? 'active':''}}" href="{{ url('admin/add-corporate')}}">Add Projects</a>
                        <a class="nav-link {{ Request::is('admin/corporate') || Request::is('admin/edit-corporate/*') ? 'active':''}}" href="{{ url('admin/corporate')}}">View Projects</a>
                    </nav>
                </div>
                <!-- Project Posts -->
                <a class="nav-link {{ Request::is('admin/corpost') || Request::is('admin/add-corpost') || Request::is('admin/corpost/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCorpost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check"></i></div>
                        Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/corpost') || Request::is('admin/add-corpost') || Request::is('admin/corpost/*') ? 'show active':''}}" id="collapseCorpost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-corpost') ? 'active':''}}" href="{{ url('admin/add-corpost')}}">Add Post</a>
                        <a class="nav-link {{ Request::is('admin/corposts') || Request::is('admin/corpost/*') ? 'active':''}}"  href="{{ url('admin/corposts')}}">View Posts</a>
                    </nav>
                </div>
                
                <!-- About -->
                <a class="nav-link {{ Request::is('admin/about') || Request::is('admin/add-about') || Request::is('admin/edit-about/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#aboutLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                    About
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/about') || Request::is('admin/add-about') || Request::is('admin/edit-about/*') ? 'show active':''}}" id="aboutLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-about') ? 'active':''}}" href="{{ url('admin/add-about')}}">Add About</a>
                        <a class="nav-link {{ Request::is('admin/about') || Request::is('admin/edit-about/*') ? 'active':''}}" href="{{ url('admin/about')}}">View About</a>
                    </nav>
                </div>

                <!-- Mentalite Page -->
                <div class="sb-sidenav-menu-heading">Mentalite</div>
                <!-- Mentalite -->
                <a class="nav-link {{ Request::is('admin/mentalite') || Request::is('admin/add-mentalite') || Request::is('admin/edit-mentalite/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#mentaliteLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    Mentalite
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/mentalite') || Request::is('admin/add-mentalite') || Request::is('admin/edit-mentalite/*') ? 'show active':''}}" id="mentaliteLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-mentalite') ? 'active':''}}" href="{{ url('admin/add-mentalite')}}">Add Mentalite</a>
                        <a class="nav-link {{ Request::is('admin/mentalite') || Request::is('admin/edit-mentalite/*') ? 'active':''}}" href="{{ url('admin/mentalite')}}">View Mentalite</a>
                    </nav>
                </div>
                
                <!-- Services Page -->
                <div class="sb-sidenav-menu-heading">Services</div>
                <a class="nav-link {{ Request::is('admin/service') || Request::is('admin/add-service') || Request::is('admin/edit-service/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#serviceLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    Services
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/service') || Request::is('admin/add-service') || Request::is('admin/edit-service/*') ? 'show active':''}}" id="serviceLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-service') ? 'active':''}}" href="{{ url('admin/add-service')}}">Add Service</a>
                        <a class="nav-link {{ Request::is('admin/service') || Request::is('admin/edit-service/*') ? 'active':''}}" href="{{ url('admin/service')}}">View Service</a>
                    </nav>
                </div>
                
                <!-- References Page -->
                <div class="sb-sidenav-menu-heading">References</div>
                <!-- Brands -->
                <a class="nav-link {{ Request::is('admin/brand') || Request::is('admin/add-brand') || Request::is('admin/edit-brand/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#brandLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    References
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/brand') || Request::is('admin/add-brand') || Request::is('admin/edit-brand/*') ? 'show active':''}}" id="brandLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-brand') ? 'active':''}}" href="{{ url('admin/add-brand')}}">Add brand</a>
                        <a class="nav-link {{ Request::is('admin/brand') || Request::is('admin/edit-brand/*') ? 'active':''}}" href="{{ url('admin/brand')}}">View References</a>
                    </nav>
                </div>
                
                <!-- Settings -->
                <div class="sb-sidenav-menu-heading">Settings</div>
                <a class="nav-link {{ Request::is('admin/settings') ? 'active':''}}" href="{{ url('admin/settings') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-gear"></i></div>
                    Settings
                </a>

                <!-- Users -->
                <a class="nav-link {{ Request::is('admin/users') ? 'active':''}}" href="{{ url('admin/users') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>

            </div>
        </div>
        
        <!-- Sidebar Footer -->
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
                {{Auth::user()->name}} 
        </div>

    </nav>
</div>