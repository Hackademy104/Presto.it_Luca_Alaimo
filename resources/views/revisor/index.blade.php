<x-layout>


    <div class="conteiner-fluid bg-custom2 ">
        <div class="row justify-content-center">
            <div class="col-12 ">
                <h1 class="title-custom display-3 ms-3">{{$announcement_to_check ? 'Ecco l\'annuncio da rivisionare' : 'Non ci sono annunci da rivisionare' }}</h1>
            </div>
        </div>
    </div>

    @if ($announcement_to_check)
    <div class="conteiner bg-custom2 h-100">
        <div class="row justify-content-center">
            <div class="col-8 col-md-6 ">
                <div id="carouselExampleIndicators" class="carousel slide ">
            
                    <div class="carousel-indicators">
                     
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

                    </div>
                @if($announcement_to_check->images)
                    <div class="carousel-inner h-75">
                    @foreach ($announcement_to_check->images as $image)
                      <div class="carousel-item @if($loop->first)active @endif h-custom">
                        <img src="{{Storage::url($image->path)}}" class="d-block w-100 " alt="...">
                      </div>
                    @endforeach
                    </div>

                @else
                    <div class="carousel-inner h-custom ">
                      <div class="carousel-item active">
                        <img src="/public/img/default.pngs" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                      </div>
                    </div>
                @endif


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                
                </div>
                <div class="col-6">
                    <h5 class="text-center label-custom">Titolo :{{$announcement_to_check->title}}</h5>
                    <h5 class="text-center label-custom"> Descrizione :{{$announcement_to_check->body}}</h5>
                    <h5 class="text-center label-custom">Categoria :{{$announcement_to_check->category->name}}</h5>
                    <h5 class="text-center label-custom"> Prezzo :{{$announcement_to_check->price}}$</h5>
                </div>
                  <div class="row mt-3 mb-4 justify-content-center">
                    <div class="col-12 col-md-4 ">
                        <form action="{{route('revisor.accept_announcement',['announcement' =>$announcement_to_check])}}" method="POST">
                        @csrf @method('PATCH')
                        <button type="submit" class="btn btn-success shadow w-100">Accetta</button>
                        </form>
                    </div>
                    <div class="col-12 col-md-4">
                        <form action="{{route('revisor.reject_announcement',['announcement' =>$announcement_to_check])}}" method="POST">
                        @csrf @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow w-100">Rifiuta</button>
                        </form>
                    </div>
                  </div>
           
        </div>
    </div>
        
    @endif


















</x-layout>