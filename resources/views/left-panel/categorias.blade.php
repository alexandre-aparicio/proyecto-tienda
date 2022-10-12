<aside class="col-lg-3 col-md-4">
    <div class="card bg-info text-white border-1 mt-5 mb-3">
        <h2 class="mb-0 p-3 text-center">Lateral</h2>
    </div>
        <nav>
            <ol class="breadcrumb" style="background: none;">
                <li class="breadcrumb-item"><small><a href="{{ route('welcome') }}">Home</a></small></li> 
                
                @if ($categoria_act == null)
                    

                @else
                    <li class="breadcrumb-item"><small><a href="{{ route('categoria', $categoria_act->id) }}">{{ $categoria_act->nombre }}</a></small></li> 
                @endif                      
            
            </ol>
        </nav> 
        <div class="mb-8 mt-3">            
            <h5 class="mb-3 text-center">Categorias</h5>
            <ul class="nav flex-column ms-3">
                    @foreach($categorias as $categoria)
                <li class="nav-item border-bottom"><a href="{{ route('categoria', $categoria->id) }}" class="nav-link">{{ $categoria->nombre }}</a></li>
                                        
                @endforeach
            </ul>
        </div>                           
</aside>