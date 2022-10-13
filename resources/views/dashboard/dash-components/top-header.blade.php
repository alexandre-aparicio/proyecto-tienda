<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
   .cliente img {
   width: 50px;
   }	
   
   .product_table img {
   width: 45px;
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
               </li>
               <!-- / Search -->
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
                     </div>
                     <!-- / Cart Item -->
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
                     </div>
                     <!-- / Cart Item -->
                  </div>
               </li>
               <!-- / Cart -->
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
                     </div>
                     <!-- / Cart Item -->
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
                     </div>
                     <!-- / Cart Item -->
                     <div class="cart-summary">
                        <span>Total</span>
                        <span class="total-price">$1799.00</span>
                     </div>
                     <ul class="text-center cart-buttons">
                        <li><a href="cart.html" class="btn btn-small">View Cart</a></li>
                        <li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
                     </ul>
                  </div>
               </li>
               <!-- / Cart -->
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
               </li>
               <!-- / Cart -->
            </ul>
            <!-- / .nav .navbar-nav .navbar-right -->
         </div>
         <div class="col-1 p-3 ">
         </div>
      </div>
   </div>
</section>
