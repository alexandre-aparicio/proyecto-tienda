<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
.cliente img {
	width: 50px;
}	
</style>
<section class="top-header">
	<div class="container-fluid mt-3">  
  <div class="row">
    <div class="col-2 p-3 ">.col</div>
    <div class="col-4 p-3 ">
    	<ul class="list-group list-group-horizontal">
				<!-- Site Logo -->
				<li class="logo text-center">
					<a href="index.html">
						<!-- replace logo here -->
						<svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">AVIATO</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</li>
				
					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i></a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->
				</ul>
    </div>
    <div class="col-5 p-3 ">
    	<ul class="top-menu text-right list-group list-group-horizontal d-flex justify-content-end me-5">

					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-android-notifications-none"></i></a>
						<div class="dropdown-menu fav-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							
						</div>

					</li><!-- / Cart -->
					
					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-email"></i></a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">$1799.00</span>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="cart.html" class="btn btn-small">View Cart</a></li>
								<li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
							</ul>
						</div>

					</li><!-- / Cart -->

					

					
					<!-- Cart -->
			

					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-contact"></i></a>
						<div class="dropdown-menu user-dropdown">
							<div class="col-lg-12 col-md-12 mb-sm-3">
									<ul>
										<li class="dropdown-header">User Area</li>
										<li role="separator" class="divider"></li>
										<li><a href="{{ route('login') }}">Login</a></li>
										<li><a href="{{ route('register-user') }}">Crear Cuenta</a></li>
										<li><a href="cart.html">Carro de compra</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="{{ route('signout') }}">logout</a></li>

									</ul>
								</div>
							
							

							
						</div>

					</li><!-- / Cart -->


				</ul><!-- / .nav .navbar-nav .navbar-right -->
    </div>
    <div class="col-1 p-3 ">
    </div>
  </div>
</div>
		</section>
		<section class="container-fluid mt-3">
  <div class="row">
    <div class="col-2 p-2 ">
    	<div class="accordion accordion-flush" id="accordionFlushExample">
  <ul class="accordion-item">
    <li class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <i
								class="tf-ion-ios-search-strong"></i><span> Acordeón artículo #1</span>
      </button>
    </li>
    <ul id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <li class="accordion-body">Lista 1</li>
      <li class="accordion-body">Lista 2</li>
      <li class="accordion-body">Lista 3</li>
      <li class="accordion-body">Lista 4</li>
    </ul>
  </ul>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Acordeón artículo #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Contenido placeholder para este acordeón, que pretende demostrar la clase <code>.accordion-flush</code>. Este es el cuerpo del acordeón del segundo elemento. Imaginemos que esto se llena con algún contenido real.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Acordeón artículo #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Contenido placeholder para este acordeón, que pretende demostrar la clase <code>.accordion-flush</code>. Este es el cuerpo del acordeón del tercer elemento. No sucede nada más emocionante aquí en términos de contenido, sino simplemente llenar el espacio para que se vea, al menos a primera vista, un poco más representativo de cómo se vería esto en una aplicación del mundo real.</div>
    </div>
  </div>
</div>
    </div>
    <div class="col-10 p-5">
    	<div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Últimos Artículos</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="">
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Billing Name</th>
                                                        <th>Date</th>
                                                        <th>Total</th>
                                                        <th>Payment Status</th>
                                                        <th>Payment Method</th>
                                                        <th>View Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                                        <td>Neal Matthews</td>
                                                        <td>
                                                            07 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $400
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                                                        <td>Jamal Burnett</td>
                                                        <td>
                                                            07 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $380
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-danger font-size-12">Chargeback</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-visa me-1"></i> Visa
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2542</a> </td>
                                                        <td>Juan Mitchell</td>
                                                        <td>
                                                            06 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $384
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                                <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2543</a> </td>
                                                        <td>Barry Dick</td>
                                                        <td>
                                                            05 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $412
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck6">
                                                                <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2544</a> </td>
                                                        <td>Ronald Taylor</td>
                                                        <td>
                                                            04 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $404
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-warning font-size-12">Refund</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-visa me-1"></i> Visa
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck7">
                                                                <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2545</a> </td>
                                                        <td>Jacob Hunter</td>
                                                        <td>
                                                            04 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $392
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
    										<div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="">Ordenar por<i class=""></i></span>
                                                </a>

                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Más gastado</a>
                                                    <a class="dropdown-item" href="#">Más pedidos</a>
                                                    <a class="dropdown-item" href="#">impagados</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Top Usuarios</h4>                                       

                                            <div class="table-responsive">
                                                <table class="table table-borderless table-centered table-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td class="cliente"><img src="{{ asset('assets/images/team') }}/team-1.jpg" class="rounded-circle " alt=""></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                            </td>
                                                            <td><span class="badge rounded-pill bg-danger font-size-12">Cancel</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cliente"><img src="{{ asset('assets/images/team') }}/team-2.jpg" class="rounded-circle " alt=""></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                            </td>
                                                            <td><span class="badge rounded-pill bg-success font-size-12">Success</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cliente"><img src="{{ asset('assets/images/team') }}/team-3.jpg" class="rounded-circle " alt=""></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                            </td>
                                                            <td><span class="badge rounded-pill bg-info text-dark font-size-12">Active</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cliente"><img src="{{ asset('assets/images/team') }}/team-1.jpg" class="rounded-circle " alt=""></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                            </td>
                                                            <td><span class="badge rounded-pill bg-warning text-dark-size-12">Pending</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cliente"><img src="{{ asset('assets/images/team') }}/team-2.jpg" class="rounded-circle " alt=""></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                            </td>
                                                            <td><span class="badge rounded-pill bg-info text-dark font-size-12">Active</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cliente"><img src="{{ asset('assets/images/team') }}/team-3.jpg" class="rounded-circle " alt=""></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Australia</p>
                                                            </td>
                                                            <td><span class="badge rounded-pill bg-success font-size-12">Success</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cliente"><img src="{{ asset('assets/images/team') }}/team-2.jpg" class="rounded-circle " alt=""></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India</p>
                                                            </td>
                                                            <td><span class="badge rounded-pill bg-danger font-size-12">Cancel</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- enbd table-responsive-->
                                        </div> <!-- data-sidebar-->
                                    </div><!-- end card-body-->
                                </div>

<div class="col-xl-8">
<div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive mb-4">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-centered datatable dt-responsive nowrap table-card-list dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px 12px; width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                            <tr class="bg-transparent" role="row"><th style="width: 24px;" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                                    
                                                        
                                                        
                                                    
                                                : activate to sort column descending">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck">
                                                        <label class="form-check-label" for="invoicecheck"></label>
                                                    </div>
                                                </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 188px;" aria-label="Invoice ID: activate to sort column ascending">Invoice ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 179px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 239px;" aria-label="Billing Name: activate to sort column ascending">Billing Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 155px;" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 135px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 239px;" aria-label="Download Pdf: activate to sort column ascending">Download Pdf</th><th style="width: 120px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                        </thead>
                                        <tbody>

                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        <tr role="row" class="odd">
                                                <td class="sorting_1 dtr-control">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck1">
                                                        <label class="form-check-label" for="invoicecheck1"></label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0131</a> </td>
                                                <td>
                                                    10 Jul, 2020
                                                </td>
                                                <td>Connie Franco</td>
                                                
                                                <td>
                                                    $141
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-success font-size-12">Paid</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1 dtr-control">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck2">
                                                        <label class="form-check-label" for="invoicecheck2"></label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0130</a> </td>
                                                <td>
                                                    09 Jul, 2020
                                                </td>
                                                <td>Paul Reynolds</td>
                                                
                                                <td>
                                                    $153
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-success font-size-12">Paid</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1 dtr-control">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck3">
                                                        <label class="form-check-label" for="invoicecheck3"></label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0129</a> </td>
                                                <td>
                                                    09 Jul, 2020
                                                </td>
                                                <td>Ronald Patterson</td>
                                                
                                                <td>
                                                    $220
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-warning font-size-12">Pending</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1 dtr-control">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck4">
                                                        <label class="form-check-label" for="invoicecheck4"></label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0128</a> </td>
                                                <td>
                                                    08 Jul, 2020
                                                </td>
                                                <td>Adella Perez</td>
                                                
                                                <td>
                                                    $175
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-success font-size-12">Paid</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1 dtr-control">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck5">
                                                        <label class="form-check-label" for="invoicecheck5"></label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0127</a> </td>
                                                <td>
                                                    07 Jul, 2020
                                                </td>
                                                <td>Theresa Mayers</td>
                                                
                                                <td>
                                                    $160
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-success font-size-12">Paid</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1 dtr-control">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck6">
                                                        <label class="form-check-label" for="invoicecheck6"></label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0126</a> </td>
                                                <td>
                                                    06 Jul, 2020
                                                </td>
                                                <td>Michael Wallace</td>
                                                
                                                <td>
                                                    $150
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-success font-size-12">Paid</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1 dtr-control">
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="invoicecheck7">
                                                        <label class="form-check-label" for="invoicecheck7"></label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0125</a> </td>
                                                <td>
                                                    05 Jul, 2020
                                                </td>
                                                <td>Oliver Gonzales</td>
                                                
                                                <td>
                                                    $165
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-warning font-size-12">Pending</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                </td>
                                            </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>


                            </div>

                            

                            
                        </div>
    </div>    
  </div>
</section>	



