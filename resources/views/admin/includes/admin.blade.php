@include('admin.includes.head')
@include('admin.includes.sidebar')
@include('admin.includes.content-top')



                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->

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

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('products.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-success text-uppercase mb-1">
                                            Products</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $products->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-store fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('orders.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-info text-uppercase mb-1">
                                            Orders</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $orders->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-scroll fa-2x text-info"></i>
                                    </div>
                                </div>
                            </div>
                                </a>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('reviews.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-warning text-uppercase mb-1">
                                            Reviews</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $reviews->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="far fa-star fa-2x text-warning"></i><i class="far fa-star fa-2x text-warning"></i><i class="far fa-star fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="redtest">TEST</h1>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->



        </div>
        <!-- End of Main Content -->



@include('admin.includes.footer')
