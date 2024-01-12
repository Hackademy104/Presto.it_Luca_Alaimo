<x-layout>


        
<div class="container-fluid bg-custom vh-100">
    <div class="row justify-content-center ">
        <div class="col-12 d-flex align-items-center justify-content-center mt-5">
            <h1 class="text-center display-1 title-custom" data-aos="fade-down-left">Presto.it</h1>
        </div>
              @if (session()->has('access.denied'))
                     <div class=" col-12 h-custom2 d-flex justify-content-center alert alert-danger ">
                                 {{session('access.denied')}}
                     </div>
              @endif
               @if (session()->has('message'))
                    <div class=" col-12 h-custom2 d-flex justify-content-center alert alert-success ">
                                 {{session('message')}}
                     </div>
               @endif

            </div>

<div class="row align-items-end justify-content-center mt-5 ">
    <div class="col-10 bg-testo">
        <h3 class="text-center consigliato display-5 p-2">
            Consigliati per te
        </h3>
    </div>

    @foreach ($announcements as $announcement)
         <div class="col-4 col-md-3 mt-3 mb-3 d-flex justify-content-center ">
             <div class="card" style="width: 18rem;">
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
             @endforeach
</div>

    
 </div>
 <div class="container-fluid bg-conteiner h-100">
    <div class="row">


<div class="col-12 mt-2">


              <video autoplay muted loop  class="video-background" >
                <source src="/video/iscrizione.mp4"  type="video/mp4" >
                Il tuo browser non supporta il tag video.
            </video>

            </div>
    
        </div>
       
    
    </div>
    <div class="container-fluid h-100 bg-clienti mt-3">
        <div class="row ms-3 p-5">
            <div class="col-12">
               <h2 class=" title-custom display-5">{{ __('ui.presentazione')}}</h2>
            </div>
         
            <div class="col-12 col-md-6">
                <h3 class=" mb-3 mt-4 detail-custom me-2">{{ __('ui.offerte')}}</h3>
                <p class="p-custom2">
                   {{ __('ui.offerte2')}} </p>
            </div>
            <div class="col-12 col-md-6">
                <h3 class=" mb-3 mt-4 detail-custom me-2"> {{ __('ui.trova')}} </h3>
                <p class="p-custom2">
                   {{ __('ui.trova2')}} </p>
            </div>
            <div class="col-12 col-md-6">
                <h3 class=" mb-3 mt-4 detail-custom me-2"> {{ __('ui.messagistica') }}</h3>
                <p class="p-custom2">
                   {{__('ui.messagistica2')}} </p>
            </div>
            <div class="col-12 col-md-6">
                <h3 class=" mb-3 mt-4 detail-custom me-2"> {{ __('ui.promuovi')}}</h3>
                <p class="p-custom2">
                   
                  {{ __('ui.promuovi2')}} </p>
            </div>
            <div class="row justify-content-center">

          
            <div class="col-6 col-md-5">
                <a href="{{route('all_announcements')}}" class="btn btn-custom w-100">{{__('ui.button1')}}</a>
            </div>
            <div class="col-6 col-md-5">
                <a href="{{route('announcement.create')}}" class="btn btn-custom w-100 me-4">{{ __('ui.button2')}}</a>
            </div>
        </div>
        </div>
    </div>





</x-layout>




    


