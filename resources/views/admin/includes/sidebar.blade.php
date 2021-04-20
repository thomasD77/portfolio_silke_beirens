<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav green sidebar sidebar-dark accordion" id="accordionSidebar">


        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                </svg>
            </div>
            <div class="sidebar-brand-text mx-3">GROEN</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        @can('isAdmin')


        <!-- Nav Item - Users Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>Users</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('users.index')}}"><i class="far fa-check-circle pr-3"></i> Users</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('roles.index')}}"><i class="far fa-check-circle pr-3"></i>Roles</a>
                </div>
            </div>
        </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - FAQ Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFAQ"
                   aria-expanded="true" aria-controls="collapseFAQ">
                    <i class="fas fa-question-circle"></i>
                    <span>FAQ</span>
                </a>
                <div id="collapseFAQ" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('faqs.index')}}"><i class="far fa-check-circle pr-3"></i> FAQ</a>
                    </div>
                </div>
            </li>



        <!-- Divider -->
        <hr class="sidebar-divider">


            <!-- Nav Item - Reviews Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                   aria-expanded="true" aria-controls="collapseBlog">
                    <i class="fas fa-blog"></i>
                    <span>Blog</span>
                </a>
                <div id="collapseBlog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('posts.index')}}"><i class="far fa-check-circle pr-3"></i> Posts</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('postcategories.index')}}"><i class="far fa-check-circle pr-3"></i> Categories</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="https://disqus.com/by/thomasdemeulenaere/" target="_blank"><i class="far fa-check-circle pr-3"></i> Comments</a>
                    </div>
                </div>
            </li>



            <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">



            <!-- Nav Item - Shop Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProspects"
                   aria-expanded="true" aria-controls="collapseProspects">
                    <i class="fas fa-fingerprint"></i>
                    <span>Contact Form</span>
                </a>
                <div id="collapseProspects" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('prospects.index')}}"><i class="far fa-check-circle pr-3"></i> Prospects</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



            <!-- Nav Item - Shop Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNewsletter"
                   aria-expanded="true" aria-controls="collapseNewsletter">
                    <i class="far fa-newspaper"></i>
                    <span>Newsletter</span>
                </a>
                <div id="collapseNewsletter" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('readers.index')}}"><i class="far fa-check-circle pr-3"></i>Subscribers</a>
                    </div>
                </div>
            </li>




        <!-- Sidebar Message -->
        <div class="sidebar-card">
            <i class="fas fa-question-circle fa-3x mb-2"></i>
            <p class="text-center mb-2 redtest">Craftworx helpdesk is there for you 24/7</p>
            <a class="btn btn-success btn-sm" href="mailto:thomas.demeulenaere@hotmail.com">Help me</a>
        </div>



        @endcan



        <!-- End of Sidebar -->



    </ul>



