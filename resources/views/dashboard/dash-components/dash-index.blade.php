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
                                 <th>Artículo ID</th>
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
                              @endforeach                             
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
                     <div class="table-responsive mb-4">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                           <div class="row">
                              <div class="col-sm-12 col-md-6"></div>
                              <div class="col-sm-12 col-md-6">
                                 <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-12">
                                 <table class="table table-centered datatable dt-responsive nowrap table-card-list dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px 12px; width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                       <tr class="bg-transparent" role="row">
                                          
                                          <th class="sorting"  rowspan="1" colspan="1" style="width: 120px;">Factura ID</th>
                                          <th class="sorting" rowspan="1" colspan="1" style="width: 179px;" >Título</th>
                                          <th class="sorting" rowspan="1" colspan="1" style="width: 239px;" >Billing Name</th>
                                          <th class="sorting" rowspan="1" colspan="1" style="width: 155px;" >Amount</th>
                                          <th class="sorting" rowspan="1" colspan="1" style="width: 135px;">Status</th>
                                          <th class="sorting" rowspan="1" colspan="1" style="width: 239px;">Download Pdf</th>
                                          <th class="sorting" rowspan="1" colspan="1" style="width: 120px;">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr role="row" class="odd">
                                          
                                          <td><a href="#" class="text-dark fw-bold">#MN0131</a> </td>
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                       <tr role="row" class="odd">
                                          
                                          <td><a href="#" class="text-dark fw-bold">#MN0131</a> </td>
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                       <tr role="row" class="odd">
                                          
                                          <td><a href="#" class="text-dark fw-bold">#MN0131</a> </td>
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                       <tr role="row" class="odd">
                                          
                                          <td><a href="#" class="text-dark fw-bold">#MN0131</a> </td>
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                       <tr role="row" class="odd">
                                          
                                          <td><a href="#" class="text-dark fw-bold">#MN0131</a> </td>
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                       <tr role="row" class="odd">
                                          
                                          <td><a href="#" class="text-dark fw-bold">#MN0131</a> </td>
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                       <tr role="row" class="odd">
                                          
                                          <td><a href="#" class="text-dark fw-bold">#MN0131</a> </td>
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
                                             <a href="#" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                             <a href="#" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-12 col-md-5">
                                 <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div>
                              </div>
                              <div class="col-sm-12 col-md-7">
                                 <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                       <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                       <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                       <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                       <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
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
   </div>
</section>