<x-layout>

<div class="container-fluid bg-custom2 h-100">
    <div class="row ">
        <div class="col-12 bg-category">
            <h1 class="title-custom display-1 ms-3" data-aos="fade-down-right"> {{__('ui.esplora')}} </h1>
            <h2 class="title-custom display-2 ms-3" data-aos="fade-down-left">{{$category->name}}</h2>
        </div>
        {{-- <div class="col-3 bg-filter">
            <div class="accordion accordion-flush w-100 p-3" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Prezzo
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <input type="range">
                    </div>
                  </div>
                </div>
              </div>
        </div> --}}
        @forelse ($category->announcements as $announcement)
        <div class="col-4 col-md-4 mt-3 mb-3 d-flex justify-content-center" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
            <div class="card" style="width: 18rem;">
                <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200'}}" class="card-img-top img-custom" alt="...">
                <div class="card-body">
                  <h5 class="card-title card-custom">{{$announcement->title}}</h5>
                  <p class="card-text card-custom">{{$announcement->body}}</p>
                  <p class="card-text card-custom">{{$announcement->price}}$</p>
                  <p class="card-custom">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}}</p>
                  <a href="" class="card-custom btn btn-custom2 d-flex justify-content-center mb-2"> {{__('ui.annunci2')}} {{$announcement->category->name}}</a>
                  <a href="{{route('announcement_detail', compact('announcement'))}}" class="btn btn-custom w-100 text-center"> {{__('ui.visualizza')}} </a>
                </div>
              </div>
        </div>
            @empty
            <div class="col-12">
                <div class="alert alert-danger py-3 shadow">
                     <p class="lead"> {{__('ui.alert2')}} </p>
                </div>
               </div>
          
            @endforelse
    </div>
</div>










</x-layout>