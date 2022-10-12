<style>
	.menu-cart {
    width: 580px !important;   
}

.menu-mes {
    width: 340px !important;   
}

.pointer {cursor: pointer;}

.alert-message
{
    margin: 8px 0;
    padding: 20px;
    border-left: 3px solid #eee;
}
.alert-message h6
{
    margin-top: 0;
    margin-bottom: 5px;
  color: gray;
}
.alert-message p
{
    font-size: 13px;
}

.alert-message h6
{
    font-size: 16px;
    
  
}
.alert-message code
{
    background-color: #fff;
    border-radius: 3px;
}

.alert-message-success
{
    background-color: #ddefe1;
   
}

.no-read {
  background:  #769f7f;
  
}

</style>

<nav class="container"> 
  <div class="dropdown float-right">
    <div class="dropdown-toggle pointer" data-toggle="dropdown">
      <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
    </div>
    <div class="dropdown-menu dropdown-menu-right menu-cart">
      <table id="shoppingCart" class="table table-condensed table-responsive">
      <thead>
         <tr>
            <th style="width:60%">Producto</th>
            <th style="width:12%">Precio</th>
            <th style="width:10%">Cantidad</th>
            <th style="width:16%"></th>
         </tr>
      </thead>
      @include('components.layouts.cart')
   </table>
    </div>
  </div>

  <div class="dropdown float-right mr-5">
    <div class="dropdown-toggle pointer" data-toggle="dropdown">
      <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
    </div>
    <div class="dropdown-menu dropdown-menu-right menu-mes">
      
      
    
        <div class="col-sm-12 col-md-12 ">
            <div class="alert-message alert-message-success no-read border border-success rounded">
                <div class="d-flex flex-row text-white">
  <div class="pr-2"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></div>
  <div class="bd-highlight"><h6 class="text-white ml-2 mt-1">Alert Message Success</h6></div>
</div>
            </div>
        </div>
      <div class="col-sm-12 col-md-12">
            <div class="alert-message alert-message-success border border-success rounded ">
              <div class="d-flex flex-row">
  <div class="pr-2"><i class="fa fa-envelope-open-o fa-lg" aria-hidden="true"></i></div>
  <div class="bd-highlight"><h6 class="fw-normal mt-1 ml-2">Alert Message Success</h6></div>
</div>
                
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.                       <a href="http://www.jquery2dotnet.com/2013/07/cool-notification-css-style.html">[Leer Más]</a>                  
                </p>
            </div>
        </div>
 
  </div></div>
    </nav>