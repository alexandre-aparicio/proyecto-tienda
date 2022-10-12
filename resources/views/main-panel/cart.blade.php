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
         @if (count($carro) > 0)
         <table id="shoppingCart" class="table table-condensed table-responsive">
            <thead>
               <tr>
                  <th style="width:60%">Producto</th>
                  <th style="width:12%">Precio</th>
                  <th style="width:10%">Cantidad</th>
                  <th style="width:16%"></th>
               </tr>
            </thead>
            <tbody>
               @foreach($carro as $pro_carro)
               <tr class="todo">
                  <td data-th="Producto" >
                     <div class="row">
                        <div class="col-md-3 text-left">
                           <img src="/img/{{ $pro_carro->imagen_url}}" alt="" class="img-fluid rounded mb-2  ">
                        </div>
                        <div class="col-md-9 text-left mt-sm-2">
                           <p class="lead">{{ $pro_carro->nombre}}</p>
                           <p class="font-weight-light">{{ $pro_carro->cat_nombre}}</p>
                        </div>
                     </div>
                  </td>
                  <td data-th="Price">{{ $pro_carro->precio}}</td>
                  <td data-th="Quantity">
                     <input type="number" class="form-control form-control-sm text-center" value="{{ $pro_carro->cantidad}}">
                  </td>
                  <td class="actions" data-th="">
                     <div class="text-right">
                        <button class="btn btn-primary btn-sm mb-2">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button class="btn btn-primary btn-sm mb-2 deleteRecord" data-id="{{ $pro_carro->carro_id }}">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>                      
                     </div>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         @else
         <div class="alert alert-info">
            <strong>Tu carro está vacio</strong> Haz click sobre el artículo
         </div>
         @endif
      </div>
   </div>
</nav>
<script>
   // Esta función evita que se cierre el dropdown si se hace click dentro
   $(function() {
   
     $('#navbar.dropdown-toggle').on('click', function(event) {
       $('.dropdown-menu').slideToggle();
       event.stopPropagation();
     });
   
     $('.dropdown-menu').on('click', function(event) {
       event.stopPropagation();
     });
   
     $(window).on('click', function() {
       $('.dropdown-menu').slideUp();
     });
   
   });   
   // Función para eliminar registros del carro de compra
   $(".deleteRecord").click(function(){
      var id = $(this).data("id");
      var token = $("meta[name='csrf-token']").attr("content");
      var pepe = $(this).closest("tr").remove();  
   
   
      $.ajax(
      {
         url: "http://carro-compra.test/cart-delete/"+id,
         type: 'POST',
         data: {
            "id": id,
            "_token": token,
            "_method": "delete",   
         },
         success: function (){  
            
         }
      });
   });
</script>