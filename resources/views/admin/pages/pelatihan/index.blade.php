 @extends('admin.base')

 @section('title', 'Pelatihan')

 @section('content')
     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4">Pelatihan</h4>

         <div class="d-flex flex-wrap justify-content-between flex-md-row flex-column">
             <h5 class="pb-1 mb-4">List Pelatihan</h5>
             <button type="button" class="btn btn-label-primary pb-1 mb-4">
                 <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Pelatihan
             </button>
         </div>

         <div class="row mb-5">
             <div class="col-md-6">
                 <div class="card mb-3">

                     <div class="row g-0">
                         <div class="col-md-4">
                             <img class="card-img card-img-left" src="{{ asset('back/img/elements/12.jpg') }}"
                                 alt="Card image" />
                         </div>
                         <div class="col-md-8">
                             <div class="card-body">
                                 <div class="d-flex flex-wrap justify-content-between flex-md-row flex-column">
                                     <h5 class="card-title">List Pelatihan</h5>
                                     <div class="btn-group">
                                         <button type="button" class="btn btn-primary">Aksi</button>
                                         <button type="button"
                                             class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                             data-bs-toggle="dropdown"></button>
                                         <div class="dropdown-menu">
                                             <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                             <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                             <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                             <div class="dropdown-divider"></div>
                                             <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                         </div>
                                     </div>
                                 </div>
                                 <p class="card-text">
                                     {{ Str::words(
                                         " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quos nulla quidem dicta
                                                                                                                                                                                                                                                                                                                                                                                  maxime veritatis fuga tempora odio accusantium, molestias laudantium voluptatibus quis
                                                                                                                                                                                                                                                                                                                                                                                  distinctio magni quibusdam, reiciendis atque. Ipsum, adipisci.
                                                                                                                                                                                                                                                                                                                                                                                  Deleniti alias ullam corporis tenetur ipsum placeat nam optio pariatur obcaecati autem,
                                                                                                                                                                                                                                                                                                                                                                                  officia delectus architecto, voluptatibus nesciunt consequatur magnam excepturi et
                                                                                                                                                                                                                                                                                                                                                                                  cumque. Enim, asperiores facere quas eos minus maiores dolore!",
                                         10,
                                     ) }}
                                 </p>
                                 <p class="card-text lh-1">
                                     Pendaftaran : 27 - 28 Agustus 2023 <br>
                                     Pelatihan : 27 - 28 Agustus 2023 <br>
                                     Peserta : 28 Orang
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
