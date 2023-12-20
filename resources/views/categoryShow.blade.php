<x-layout>

<div class="conteiner bg-custom2 h-100">
    <div class="row justify-content-center">
        <div class="col-12 bg-category">
            <h1 class="title-custom display-1 ms-3" data-aos="fade-down-right">Esplora la categoria </h1>
            <h2 class="title-custom display-2 ms-3" data-aos="fade-down-left">{{$category->name}}</h2>
        </div>
        @forelse ($category->announcements as $announcement)
        <div class="col-12 col-md-4 col-lg-4 mb-5 mt-5 " data-aos="fade-left"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="500">
            <div class="card" style="width: 18rem;">
                <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
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
                <div class="alert alert-danger py-3 shadow">
                     <p class="lead">Non ci sono annunci su questa categoria per questa ricerca!</p>
                </div>
               </div>
          
            @endforelse
    </div>
</div>










</x-layout>