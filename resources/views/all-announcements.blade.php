<x-layout>

<div class="container h-100 bg-custom2">
    <div class="row justify-content-center">
        {{-- <div class="col-12">
            <h1 class="text-center display-1 title-custom" data-aos="zoom-in-up">Tutti gli Annunci</h1>
        </div> --}}

        <div class="col-12  h-25 bg-filter p-3 d-flex justify-content-around flex-column">
           
          
          @foreach ($categories as $category)
                    
              <a wire:model.defer="category" class="btn btn-custom3 pe-2 ps-2 m-1 " href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a>   
          
            @endforeach
          
        </div>
            
            
              

              {{-- <div class="accordion accordion-flush w-50 p-4" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header ">
                    <button class="accordion-button collapsed testi" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Prezzo
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <input type="range" value="0">
                    </div>
                  </div>
                </div>
              </div> --}}


     
        
        @forelse ($announcements as $announcement)
      
            <div class="col-4 col-md-3 mt-3 mb-3 d-flex justify-content-center card-all" data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
                <div class="card " style="width: 18rem;">
                    <img  src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200'}}" class="card-img-top img-custom" alt="...">
                    <div class="card-body ">
                      <h5 class="card-title card-custom">{{$announcement->title}}</h5>
                      <p class="card-text card-custom">{{$announcement->body}}</p>
                      <p class="card-text card-custom">{{$announcement->price}}$</p>
                      <p class="card-custom">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}}</p>
                      <a href="" class="card-custom btn btn-custom2 d-flex justify-content-center mb-2"> {{__('ui.annunci2')}} {{$announcement->category->name}}</a>
                      <a href="{{route('announcement_detail', compact('announcement'))}}" class="btn btn-custom w-100 text-center">{{__('ui.visualizza')}}</a>
                    </div>
                  </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning">
                    <p class="lead">{{__('ui.alert')}}</p>
                </div>
            </div>
        @endforelse
        {{$announcements->links()}}
    </div>
</div>





</x-layout>