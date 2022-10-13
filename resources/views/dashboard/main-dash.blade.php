@extends ('layouts.base')
@section('content')
<section class="container-fluid mt-3">
   <div class="row">
      <div class="col-2 p-2 ">
         <div class="accordion accordion-flush" id="accordionFlushExample">
            @foreach ($menus as $menu)
            <ul class="accordion-item">
               <li class="accordion-header" id="flush-heading-{{ $menu->id }}">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $menu->id }}" aria-expanded="false" aria-controls="flush-collapse-{{ $menu->id }}">
                  <i
                     class="tf-{{ $menu->icono }}"></i><span>{{ $menu->titulo }}</span>
                  </button>
               </li>
               <ul id="flush-collapse-{{ $menu->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  @foreach ($submenus as $submenu)
                  @if ($submenu->dashmenu_id == $menu->id)
                  <li class="accordion-body">{{ $submenu->titulo }}</li>
                  @endif                 
                  @endforeach
               </ul>
            </ul>
            @endforeach
         </div>
      </div>
      <div class="col-10 p-5">
         <div class="row mb-4">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-6 col-md-6">
                           <h4 class="card-title mb-4">Artículos</h4>
                        </div>
                        <div  class="col-sm-6 col-md-6 " >
                           <label> Buscar articulo: <input type="search"></label>
                        </div>
                     </div>
                     <div class="">
                        <table class="table table-centered table-nowrap mb-0">
                           <thead class="table-light">
                              <tr>
                                 <th>Artículo ID</th>
                                 <th>Imagen</th>
                                 <th>Nombre</th>
                                 <th>Fecha</th>
                                 <th>Precio</th>
                                 <th>Categoría</th>
                                 <th>Payment Method</th>
                                 <th>Acciones</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($articulos as $articulo)
                              <tr>
                                 <td><a href="#" class="text-body fw-bold">#MB2540</a> </td>
                                 <td class="product_table"><img src="{{ asset('assets/images/shop/products') }}/{{ $articulo->imagen_url }}.jpg"  alt=""></td>
                                 <td>{{ $articulo->nombre }}</td>
                                 <td>{{ $articulo->created_at }}</td>
                                 <td>{{ $articulo->precio }}</td>
                                 <td>
                                    <span class="badge rounded-pill bg-success">{{ $articulo->cat_nombre }}</span>
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
                              @endforeach                         
                           </tbody>
                        </table>
                     </div>
                     {!! $articulos->render() !!}
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
                              @foreach($usuarios as $usuario)
                              <tr>
                                 <td class="cliente"><img src="{{ asset('assets/images/team') }}/{{ $usuario->avatar}}.jpg" class="rounded-circle " alt=""></td>
                                 <td>
                                    <h6 class="font-size-15 mb-1 fw-normal">{{ $usuario->name}}</h6>
                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>{{ $usuario->email}}</p>
                                 </td>
                                 <td><span class="badge rounded-pill bg-danger font-size-12">Cancel</span></td>
                                 <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                     <!-- enbd table-responsive-->
                  </div>
                  <!-- data-sidebar-->
               </div>
               <!-- end card-body-->
            </div>
            <div class="col-xl-8">
               <div class="card">
                  <div class="card-body">
                     <div class=" mb-4">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                           <div class="row">
                              <div class="col-sm-6 col-md-6">
                                 <h4 class="card-title mb-4">Compras realizadas</h4>
                              </div>
                              <div  class="col-sm-6 col-md-6 " >
                                 <label>Búsqueda:<input type="search"></label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-11">
                                 <table class="table table-centered datatable dt-responsive nowrap table-card-list dataTable no-footer dtr-inline">
                                    <thead>
                                       <tr class="bg-transparent" role="row">
                                          <th class="sorting"  rowspan="1" colspan="1" >Factura ID</th>
                                          <th class="sorting" rowspan="1" colspan="1" >Título</th>
                                          <th class="sorting" rowspan="1" colspan="1" >Billing Name</th>
                                          <th class="sorting" rowspan="1" colspan="1" >Amount</th>
                                          <th class="sorting" rowspan="1" colspan="1" >Status</th>
                                          <th class="sorting" rowspan="1" colspan="1" >Pdf</th>
                                          <th class="sorting" rowspan="1" colspan="1" >Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr role="row" class="odd">
                                          @foreach ($compras as $compra)
                                          <td><a href="#" class="text-dark fw-bold">{{ $compra->identificador }}</a> </td>
                                          <td>
                                             10 Jul, 2020
                                          </td>
                                          <td>{{ $compra->usr_nombre }}</td>
                                          <td>
                                             {{ $compra->total }}
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-12 col-md-7">
                                 {{ $compras->links() }}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection