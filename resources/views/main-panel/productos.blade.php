<section class="col-lg-9 col-md-12">
    <div class="card bg-light border-1 text-dark mt-5">
        @if ($categoria_act == null)                                
        <h2 class="mb-0 p-3 bg-info text-white text-center">Todos los artículos</h2>
        @else
        <h2 class="mb-0 p-3 bg-info text-white text-center">Categoría {{ $categoria_act->nombre }}</h2> 
        @endif 
                                
            </div>
                            <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-4">
                                @foreach($productos as $producto)
                                <div class="col">
                                    <div class="card ">                                                                             
                                        <a href="#">
                                            <img src="/img/{{ $producto->imagen_url}}" alt="Grocery Ecommerce Template" class="img-fluid">
                                        </a>   
                                        <div class="text-small m-1"><a href="#!" class="text-decoration-none text-muted">
                                            <small>{{ $producto->categoria_nombre }}</small></a>
                                        </div>  
                                        <h6 class="fs-2 m-2"><a href="shop-single.html" class="text-inherit text-decoration-none">{{ $producto->nombre }}</a></h6>
                                        <div class="d-flex justify-content-between align-items-center m-3">
                                            <div>
                                                <span class="text-dark">${{ $producto->precio }}</span>
                                            </div>                    
                                            
                                            <form action="{{ route('cart-insert') }}" method="POST">
                                                @csrf
                                            <input type="hidden" value="{{ $producto->id }}" name="producto">
                                            <input type="hidden" value="1" name="cantidad">
                                                   <button type="submit" class="btn btn-primary btn-sm">Add</button>
                                                </form>
                                        </div>                                                                      
                                    </div>
                                </div>
                                @endforeach 
                            </div>
</section>