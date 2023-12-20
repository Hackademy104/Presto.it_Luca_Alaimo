<x-layout>

<div class="conteiner h-100 bg-custom2">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center display-1 title-custom" data-aos="zoom-in-up">Tutti gli Annunci</h1>
        </div>
        
        @forelse ($announcements as $announcement)
      
            <div class="col-12 col-md-4 mt-3 mb-3 d-flex justify-content-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
                <div class="card" style="width: 18rem;">
                    <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200'}}" class="card-img-top img-custom" alt="...">
                    <div class="card-body">
                      <h5 class="card-title card-custom">{{$announcement->title}}</h5>
                      <p class="card-text card-custom">{{$announcement->body}}</p>
                      <p class="card-text card-custom">{{$announcement->price}}$</p>
                      <p class="card-custom">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}}</p>
                      <a href="" class="card-custom btn btn-success d-flex justify-content-center mb-2">Categoria: {{$announcement->category->name}}</a>
                      <a href="{{route('announcement_detail', compact('announcement'))}}" class="btn btn-custom w-100">Visualizza</a>
                    </div>
                  </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning">
                    <p class="lead">Non ci sono annunci per questa ricerca!Prova a cambiarla!</p>
                </div>
            </div>
        @endforelse
        {{$announcements->links()}}
    </div>
</div>





</x-layout>