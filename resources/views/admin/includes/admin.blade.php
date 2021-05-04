@include('admin.includes.head')
@include('admin.includes.sidebar')
@include('admin.includes.content-top')



                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    @can('isAdmin')
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a class="text-decoration-none" href="{{route('users.index')}}">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-primary text-uppercase mb-1">
                                            Users</h3>

                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endcan

                <!-- Earnings (Monthly) Card Example -->
                    @can( 'isPublisher')
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="text-decoration-none" href="{{route('faqs.index')}}">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h3 class=" font-weight-bold text-primary text-uppercase mb-1">
                                                    FAQS</h3>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $faqs->total() }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-question-circle fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endcan


                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('readers.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-success text-uppercase mb-1">
                                            Subscribers</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $readers->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="far fa-newspaper fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('prospects.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-info text-uppercase mb-1">
                                            Readers</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $prospects->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-fingerprint fa-2x text-info"></i>
                                    </div>
                                </div>
                            </div>
                                </a>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('posts.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-warning text-uppercase mb-1">
                                            Posts</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-blog fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>








@include('admin.includes.footer')
