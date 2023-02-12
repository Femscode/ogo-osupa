<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesdesign.in/zinzer/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 14:51:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Ogo Osupa Concept Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="backend/assets/images/favicon.ico">
    <!-- morris css -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="backend/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="backend/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu"><button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="mdi mdi-close"></i></button>
            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center">
                    <a href="index.html" class="logo"><img src="assets/images/logo_dark.png" height="20" alt="logo"></a>
                </div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li><a href="#" class="waves-effect"><i class="dripicons-home"></i> <span>Dashboard <span class="badge badge-success badge-pill float-right">3</span></span></a></li>
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Investors </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="#">View all Investors</a></li>
                                <!-- <li><a href="ui-badge.html">Unapproved admissions</a></li> -->
                            </ul>
                        </li>
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span>Manage </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Total Request</a></li>
                            </ul>
                        </li>
                        <!-- <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span>Manage Withdrawer</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="advanced-rating.html">Unapproved Withdrawer</a></li>
                                <li><a href="advanced-rating.html">Approved Withdrawer</a></li>
                            </ul>
                        </li> -->
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Profile</span><span class="badge badge-warning badge-pill float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Update your profile</a></li>

                            </ul>
                        </li>
                        <!-- <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> Charts </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Tables </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                            </ul>
                        </li> -->

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <div class="topbar">
                    <div class="topbar-left	d-none d-lg-block">
                        <div class="text-center">
                            <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="22" alt="logo"></a> -->
                        </div>
                    </div>
                    <nav class="navbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar"><input class="search-input" type="search" placeholder="Search"> <a href="#" class="close-search toggle-search" data-target="#search-wrap"><i class="mdi mdi-close-circle"></i></a></div>
                        </div>
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list"><a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap"><i class="mdi mdi-magnify noti-icon"></i></a></li>
                            <li class="list-inline-item dropdown notification-list"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-bell-outline noti-icon"></i> <span class="badge badge-danger badge-pill noti-icon-badge">3</span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Notification (3)</h5>
                                    </div>
                                    <div class="slimscroll-noti">
                                        <!-- item-->
                                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a> -->
                                    </div>
                                    <!-- All--><a href="javascript:void(0);" class="dropdown-item notify-all">View All</a>
                                </div>
                            </li>
                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><span class="d-none d-md-inline-block ml-1">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a> <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a> <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item"><button type="button" class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
                            <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">Create New <i class="mdi mdi-plus"></i></a>
                                <div class="dropdown-menu dropdown-menu-animated"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="list-inline-item notification-list d-none d-sm-inline-block"><a href="#" class="nav-link waves-effect">Activity</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Top Bar End -->
                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4 class="page-title m-0">Dashboard</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="float-right d-none d-md-block">
                                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-settings mr-1"></i> Settings</button>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end page-title-box -->
                            </div>
                        </div>
                        <!-- end page title -->
                        @if(Session::has('message'))
                        <div class='alert alert-success'><span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></span> {{Session::get('message')}}</div></button>
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">Plan for Tommorrow</h6>
                                            <h4 class="mb-3 mt-0 float-right">{{count($plan_for_tommorrow)}}</h4>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a></div>
                                        <!-- <button class='btn btn-success'>Deposit</button> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pink mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">Advertisement</h6>
                                            <h4 class="mb-3 mt-0 float-right">{{count($advertisement)}}</h4>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">Atonigba</h6>
                                            <h4 class="mb-3 mt-0 float-right">{{count($atonigba)}}</h4>
                                        </div>
                                    </div>
                                    <!-- <div class="p-3">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a></div>
                                        <p class="font-14 m-0">Last : 1776</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Plan for Tommorrow</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>


                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Service</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($plan_for_tommorrow as $key => $customer)
                                                    <tr>
                                                        <th scope="row">{{++$key}}</th>
                                                        <td>{{$customer->name}}</td>
                                                        <td>{{$customer->email}}</td>
                                                        <td>{{$customer->phone}}</td>
                                                        <td>{{$customer->services}}</td>
                                                        <td>{{$customer->message}}</td>
                                                        <td>
                                                            <button class='fa fa-call btn btn-success'><a style='color:white' href='tel:{{$customer->phone}}'>Call</a>
                                                                <button class='fa fa-mail btn btn-primary'><a style='color:white' href='mailto:{{$customer->email}}'>Mail</a>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <h6>{{$plan_for_tommorrow->links()}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Fix Vehicle Prices</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>


                                                    <th scope="col">ID</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col">Investment Amount</th>
                                                    <th scope="col">Profit</th>
                                                    <th scope="col">Duration</th>
                                                  <th scope="col">Weekly</th>
                                                  
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($prices as $key => $prices)
                                                    <tr>
                                                        <form method='post' action='{{route("createPrice",[$prices->id])}}'>@csrf
                                                        <th scope="row">{{++$key}}</th>
                                                        <td><input type='text' name='plan' class='form-control' value='{{$prices->plan ?? ""}}'></td>
                                                        <td><input type='number' name='investment_amount' class='form-control' value='{{$prices->investment_amount ?? ""}}'></td>
                                                        <td><input type='number' name='profit' class='form-control' value='{{$prices->profit ?? ""}}'></td>
                                                        <td><input type='text' name='duration' class='form-control' value='{{$prices->duration ?? ""}}'></td>
                                                         <td><input type='text' name='weekly' class='form-control' value='{{$prices->weekly ?? ""}}'></td>
                                                        <td>
                                                            <button type='submit' class='fa fa-call btn btn-success'>Update</button>
                                                        </td>
                                                        </form>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <h6>{{$plan_for_tommorrow->links()}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Atonigba</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>


                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Service</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($atonigba as $key => $customer)
                                                    <tr>
                                                        <th scope="row">{{++$key}}</th>
                                                        <td>{{$customer->name}}</td>
                                                        <td>{{$customer->email}}</td>
                                                        
                                                        <td>{{$customer->services}}</td>
                                                        <td>{{$customer->message}}</td>
                                                        <td>
                                                            <button class='fa fa-call btn btn-success'><a style='color:white' href='tel:{{$customer->call}}'>Call</a>
                                                                <button class='fa fa-mail btn btn-primary'><a style='color:white' href='mailto:{{$customer->email}}'>Mail</a>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <h6>{{$atonigba->links()}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Live Tv Programs
                                        <a style='float:right' href='/video'>Create Video</a></h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>


                                                    <th scope="col">ID</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Video</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($videos as $key => $customer)
                                                    <tr>
                                                        <th scope="row">{{++$key}}</th>
                                                        <td>{{$customer->title}}</td>
                                                        <td> <video width="150" height="100" controls>
  <source src="/public/videos/{{$customer->video}}" type="video/mp4">
  <source src="/public/videos/{{$customer->video}}" type="video/ogg">
Your browser does not support the video tag.
</video>
                                                        </td>
                                                        <td>
                                                            <button class='fa fa-trash btn btn-success'><a style='color:white' href='{{route("deletevideo",[$customer->id])}}'>Delete</a>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <h6>{{$videos->links('pagination::bootstrap-4')}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Media and Entertainment</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>


                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Service</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($media as $key => $customer)
                                                    <tr>
                                                        <th scope="row">{{++$key}}</th>
                                                        <td>{{$customer->name}}</td>
                                                        <td>{{$customer->email}}</td>
                                                        
                                                        <td>{{$customer->services}}</td>
                                                        <td>{{$customer->message}}</td>
                                                        <td>
                                                            <button class='fa fa-call btn btn-success'><a style='color:white' href='tel:{{$customer->call}}'>Call</a>
                                                                <button class='fa fa-mail btn btn-primary'><a style='color:white' href='mailto:{{$customer->email}}'>Mail</a>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <h6>{{$media->links()}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                             <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Document files(Plan For Tommorrow)</h4>
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                                @foreach($downloadplanfortommorrow as $plan)
                                                <tr>
                                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                                    <td>
                                                        <h6 class="mt-0">{{$plan->name}}</h6>
                                                        <p class="text-muted mb-0">{{$plan->email}}</p>
                                                    </td>
                                                    <td><a href="{{route('downloadplanfortommorrow',[$plan->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-download"></i></a></td>
                                                </tr>
                                                @endforeach
                                             </tbody>
                                             <h6>{{$downloadplanfortommorrow->links()}}</h6>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Document files(Atonigba)</h4>
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                                @foreach($downloadatonigba as $plan)
                                                <tr>
                                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                                    <td>
                                                        <h6 class="mt-0">{{$plan->name}}</h6>
                                                        <p class="text-muted mb-0">{{$plan->email}}</p>
                                                    </td>
                                                    <td><a href="{{route('downloadatonigba',[$plan->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-download"></i></a></td>
                                                </tr>
                                                @endforeach
                                             </tbody>
                                             <h6>{{$downloadatonigba->links()}}</h6>
                                        </table>
                                    </div>
                                </div>
                            </div>
              
                        </div>
                            <!-- end row -->
                            <!-- <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Sales Report</h4>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div id="morris-line-example" class="morris-chart" style="height: 300px"></div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Sales Analytics</h4>
                                        <div id="morris-donut-example" class="morris-chart" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- container fluid -->
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->
            <footer class="footer">2021 <span class="d-none d-md-inline-block">Powered by Caretech</span></footer>
        </div>
        <!-- End Right content here -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="backend/assets/js/jquery.min.js"></script>
    <script src="backend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="backend/assets/js/modernizr.min.js"></script>
    <script src="backend/assets/js/detect.js"></script>
    <script src="backend/assets/js/fastclick.js"></script>
    <script src="backend/assets/js/jquery.slimscroll.js"></script>
    <script src="backend/assets/js/jquery.blockUI.js"></script>
    <script src="backend/assets/js/waves.js"></script>
    <script src="backend/assets/js/jquery.nicescroll.js"></script>
    <script src="backend/assets/js/jquery.scrollTo.min.js"></script>
    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>
    <!-- dashboard js -->
    <script src="backend/assets/pages/dashboard.int.js"></script>
    <!-- App js -->
    <script src="backend/assets/js/app.js"></script>
</body>
<!-- Mirrored from themesdesign.in/zinzer/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 14:52:29 GMT -->

</html>