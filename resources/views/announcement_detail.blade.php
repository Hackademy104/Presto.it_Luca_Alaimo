<x-layout>

<div class="conteiner vh-100 bg-custom2">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-1 title-custom">Dettaglio {{$announcement->title}}</h1>
        </div>



        <div class="row justify-content-center">


            <div class="col-10 col-md-6">
                {{-- <img src="https://picsum.photos/400" alt=""> --}}
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                 @if($announcement->images)
                    <div class="carousel-inner h-75">
                    @foreach ($announcement->images as $image)
                      <div class="carousel-item @if($loop->first)active @endif h-custom">
                        <img src="{{Storage::url($image->path)}}" class="d-block w-100 " alt="...">
                      </div>
                    @endforeach
                    </div>

                @else
                    <div class="carousel-inner h-custom ">
                      <div class="carousel-item active">
                        <img src="/public/img/default.png" class="d-block w-100" alt="...">
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


        <div class="col-12 col-md-6 d-flex  flex-column align-items-center">

            <h1 class="title-custom">{{$announcement->title}}</h1>
            <h3 class="detail-custom">{{$announcement->body}}</h3>
            <p class="detail-custom">{{$announcement->price}}$</p>
            <p class="detail-custom ms-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae sunt debitis odit? Necessitatibus, iste amet. Ipsum dolorum voluptate excepturi ratione sint delectus quibusdam ut nam, quo, atque, odit voluptatum aperiam nulla? Officiis suscipit adipisci explicabo, accusamus ullam eos quasi, laboriosam sint cumque quibusdam commodi porro illo doloribus obcaecati fuga.</p>

        </div>


    </div>

    </div>
</div>







</x-layout>