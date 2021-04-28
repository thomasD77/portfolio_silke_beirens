<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav green sidebar sidebar-dark accordion" id="accordionSidebar">


        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
            <div class="sidebar-brand-icon">
                <i class="fas fa-door-open"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Website</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>



        @can('isAdmin')

            <!-- Divider -->
                <hr class="sidebar-divider">


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
            </div>
        </li>

    @endcan

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
                        <a class="collapse-item" href="{{route('prospects.index')}}"><i class="far fa-check-circle pr-3"></i>Subscribers</a>
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
                        <a class="collapse-item" href="{{route('readers.index')}}"><i class="far fa-check-circle pr-3"></i>Readers</a>
                    </div>
                </div>
            </li>




        <!-- Sidebar Message -->
        <div class="sidebar-card">
            <i class="fas fa-question-circle fa-3x mb-2"></i>
            <p class="text-center mb-2 redtest">Do You Need Help? <br> We Are There 24/7</p>
            <a class="btn btn-success btn-sm" href="mailto:thomas.demeulenaere@hotmail.com">Help me</a>
        </div>







        <!-- End of Sidebar -->



    </ul>



