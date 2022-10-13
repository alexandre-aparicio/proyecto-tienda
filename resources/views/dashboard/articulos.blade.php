<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
      <!-- Favicon icon -->
      <link rel="icon" type="{{ asset('dash-assets/image/png') }}" sizes="16x16" href="images/favicon.png">
      <!-- Pignose Calender -->
      <link href="{{ asset('dash-assets/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
      <!-- Chartist -->
      <link rel="stylesheet" href="{{ asset('dash-assets/plugins/chartist/css/chartist.min.css') }}">
      <link rel="stylesheet" href="{{ asset('dash-assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
      <!-- Custom Stylesheet -->
      <link href="{{ asset('dash-assets/css/style.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

      <style>
      	.avatar-sm {
    			height: 5rem;
    			width: 5rem;
				}

      </style>
   </head>
   <body>
     
      <div id="main-wrapper">
         
         <div class="nav-header">
            <div class="brand-logo">
               <a href="index.html">
               <b class="logo-abbr"><img src="{{ asset('dash-assets/images/logo.png') }}" alt=""> </b>
               <span class="logo-compact"><img src="{{ asset('dash-assets/images/logo-compact.png') }}" alt=""></span>
               <span class="brand-title">
               <img src="images/logo-text.png" alt="">
               </span>
               </a>
            </div>
         </div>
         <div class="header">
            <div class="header-content clearfix">
               <div class="nav-control">
                  <div class="hamburger">
                     <span class="toggle-icon"><i class="icon-menu"></i></span>
                  </div>
               </div>
               <div class="header-left">
                  <div class="input-group icons">
                     <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                     </div>
                     <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                     <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                           <input type="text" class="form-control" placeholder="Search">
                        </form>
                     </div>
                  </div>
               </div>
               <div class="header-right">
                  <ul class="clearfix">
                     <li class="icons dropdown">
                        <a href="#" class="dropdown" data-bs-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="badge badge-pill gradient-1">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu">
                           <div class="dropdown-content-heading d-flex justify-content-between">
                              <span class="">3 New Messages</span>  
                              <a href="javascript:void()" class="d-inline-block">
                              <span class="badge badge-pill gradient-1">3</span>
                              </a>
                           </div>
                           <div class="dropdown-content-body">
                              <ul>
                                 <li class="notification-unread">
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Saiful Islam</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="notification-unread">
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Adam Smith</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Can you do me a favour?</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Barak Obama</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Hilari Clinton</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Hello</div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li class="icons dropdown">
                        <a href="#" class="dropdown" data-bs-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-pill gradient-2">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                           <div class="dropdown-content-body">
                              <ul>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Events near you</h6>
                                          <span class="notification-text">Within next 5 days</span> 
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Event Started</h6>
                                          <span class="notification-text">One hour ago</span> 
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Event Ended Successfully</h6>
                                          <span class="notification-text">One hour ago</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Events to Join</h6>
                                          <span class="notification-text">After two days</span> 
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li class="icons dropdown d-none d-md-flex">
                        <a href="#" class="dropdown" data-bs-toggle="dropdown">
                        <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                           <div class="dropdown-content-body">
                              <ul>
                                 <li><a href="javascript:void()">English</a></li>
                                 <li><a href="javascript:void()">Dutch</a></li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                           <span class="activity active"></span>
                           <img src="{{ asset('dash-assets/images/user/1.png') }}" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                           <div class="dropdown-content-body">
                              <ul>
                                 <li>
                                    <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <i class="icon-envelope-open"></i> <span>Inbox</span> 
                                       <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                    </a>
                                 </li>
                                 <hr class="my-2">
                                 <li>
                                    <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                 </li>
                                 <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         
         <div class="nk-sidebar">
            <div class="nk-nav-scroll">
               <ul class="accordion" id="accordionLateral" >
                  <li class="nav-label">Dashboard</li>
                  <li class="accordion-item">
                  <div class="accordion-header">
      						<a class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-01" aria-expanded="true" aria-controls="collapse-01">
        			<i class="icon-chart menu-icon"></i><span class="nav-label">Estadísticas</span>
      							</a>
    							</div>
                  <div class="collapse" id="collapse-01" style="">
                     <ul class="list-unstyled fw-normal pb-1 small">
                        <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded active" aria-current="page">Accordion</a></li>
                        <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded">Productos Vendidos</a></li>
                        <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded">Badge</a></li>
                     </ul>
                  </div>
                  </li>

                  <li class="accordion-item">
                  <div class="accordion-header">
      						<a class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-02" aria-expanded="true" aria-controls="collapse-02">
        			<i class="icon-layers menu-icon"></i><span class="nav-label">Artículod</span>
      							</a>
    							</div>
                  <div class="collapse" id="collapse-02" style="">
                     <ul class="list-unstyled fw-normal pb-1 small">
                        
                        <li><a href="{{ route('dashboard.articulos') }}" class="d-inline-flex align-items-center rounded">Todos los Artículos</a></li>
                        <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded">Badge</a></li>
                     </ul>
                  </div>
                  </li>

                  
               </ul>
            </div>
         </div>
         
         <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                	<div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Best Selling Products</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fw-semibold text-uppercase fs-12">Mostrar por categoría:
                                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Yesterday</a>
                                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                                            <a class="dropdown-item" href="#">This Month</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->
                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                        <tbody>
                                                        	@foreach ($articulos as $articulo)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="{{ asset('assets/images/shop/products')}}/{{ $articulo->imagen_url }}" alt="" class="img-fluid d-block">
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                                            <span class="text-muted">24 Apr 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">62</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$1,798</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="d-flex">
                {!! $articulos->links() !!}
            </div>
                                                                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Best Selling Products</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Yesterday</a>
                                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                                            <a class="dropdown-item" href="#">This Month</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block">
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                                            <span class="text-muted">24 Apr 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">62</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$1,798</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="assets/images/products/img-2.png" alt="" class="img-fluid d-block">
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a></h5>
                                                                            <span class="text-muted">19 Mar 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$85.20</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">35</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal"><span class="badge badge-soft-danger">Out of stock</span> </h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$2982</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="assets/images/products/img-3.png" alt="" class="img-fluid d-block">
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Borosil Paper Cup</a></h5>
                                                                            <span class="text-muted">01 Mar 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$14.00</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">80</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">749</h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$1120</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="assets/images/products/img-4.png" alt="" class="img-fluid d-block">
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">One Seater Sofa</a></h5>
                                                                            <span class="text-muted">11 Feb 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$127.50</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">56</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal"><span class="badge badge-soft-danger">Out of stock</span></h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$7140</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                            <img src="assets/images/products/img-5.png" alt="" class="img-fluid d-block">
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a></h5>
                                                                            <span class="text-muted">17 Jan 2021</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$54</h5>
                                                                    <span class="text-muted">Price</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">74</h5>
                                                                    <span class="text-muted">Orders</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">805</h5>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 my-1 fw-normal">$3996</h5>
                                                                    <span class="text-muted">Amount</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="text-muted">
                                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                        </div>
                                                    </div>
                                                    <ul class="pagination pagination-separated pagination-sm mb-0">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Top Sellers</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Download Report</a>
                                                            <a class="dropdown-item" href="#">Export</a>
                                                            <a class="dropdown-item" href="#">Import</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2">
                                                                        </div>
                                                                        <div>
                                                                            <h5 class="fs-14 my-1 fw-medium">
                                                                                <a href="apps-ecommerce-seller-details.html" class="text-reset">iTest Factory</a>
                                                                            </h5>
                                                                            <span class="text-muted">Oliver Tyler</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Bags and Wallets</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">8547</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$541200</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">32%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/companies/img-2.png" alt="" class="avatar-sm p-2">
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Digitech Galaxy</a></h5>
                                                                            <span class="text-muted">John Roberts</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Watches</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">895</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$75030</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">79%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/companies/img-3.png" alt="" class="avatar-sm p-2">
                                                                        </div>
                                                                        <div class="flex-gow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Nesta Technologies</a></h5>
                                                                            <span class="text-muted">Harley Fuller</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Bike Accessories</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">3470</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$45600</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">90%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/companies/img-8.png" alt="" class="avatar-sm p-2">
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Zoetic Fashion</a></h5>
                                                                            <span class="text-muted">James Bowen</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Clothes</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">5488</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$29456</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">40%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/companies/img-5.png" alt="" class="avatar-sm p-2">
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-14 my-1 fw-medium">
                                                                                <a href="apps-ecommerce-seller-details.html" class="text-reset">Meta4Systems</a>
                                                                            </h5>
                                                                            <span class="text-muted">Zoe Dennis</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">Furniture</span>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0">4100</p>
                                                                    <span class="text-muted">Stock</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-muted">$11260</span>
                                                                </td>
                                                                <td>
                                                                    <h5 class="fs-14 mb-0">57%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                                </td>
                                                            </tr><!-- end -->
                                                        </tbody>
                                                    </table><!-- end table -->
                                                </div>

                                                <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="text-muted">
                                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                        </div>
                                                    </div>
                                                    <ul class="pagination pagination-separated pagination-sm mb-0">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div> <!-- .card-body-->
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                
                </div>
            </div>

            <!-- #/ container -->
        </div>
         <!--**********************************
            Content body end
            ***********************************-->
         <!--**********************************
            Footer start
            ***********************************-->
         <div class="footer">
            <div class="copyright">
               <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
         </div>
         <!--**********************************
            Footer end
            ***********************************-->
      </div>
   </body>
</html>