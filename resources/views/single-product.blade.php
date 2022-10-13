@extends ('layouts.base')
@section('content')
<div class="container">
   <div class="row mt-20">
      <div class="col-md-5">
         <div id="carousel-products" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="{{ asset('assets/images/shop/products') }}/{{ $datos[0]->imagen_url }}.jpg" class="d-block w-100" alt="...">
               </div>
               @foreach ($imagenes as $imagen)
               <div class="carousel-item">
                  <img src="{{ asset('assets/images/shop/products') }}/{{ $imagen->imagen_url }}.jpg" class="d-block w-100" alt="...">
               </div>
               @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-products" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-products" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
         </div>
      </div>
      <div class="col-md-7">
         <div class="single-product-details">
            <h2>{{$datos[0]->nombre}}</h2>
            <p class="product-price">{{$datos[0]->precio}}</p>
            <div class="product-description mt-20">
               {{ $datos[0]->descripcion }}
            </div>
            <div class="product-quantity">
               <span>Quantity:</span>
               <div class="product-quantity-slider">
                  <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="product-quantity" type="text" value="0" name="product-quantity" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
               </div>
            </div>
            <div class="product-category">
               <span>Categories:</span>
               <ul>
                  <li><a href="product-single.html">Products</a></li>
                  <li><a href="product-single.html">Soap</a></li>
               </ul>
            </div>
            <a href="cart.html" class="btn btn-main mt-20">Add To Cart</a>
         </div>
      </div>
   </div>
</div>
@endsection