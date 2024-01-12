<x-layout>

    <div class="conteiner h-100 bg-custom2">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="title-custom text-center display-3 mt-2" data-aos="flip-up">{{__('ui.crea')}}</h1>
            </div>
            
            <div class="col-10 col-md-5">
                <ul>

             
                <li class="testi blu"> {{__('ui.titolo')}}</li>
                <li class="testi blu">{{__('ui.servizio')}}</li>
                <li class="testi blu">{{__('ui.price')}} </li>
                <li class="testi blu">{{__('ui.categoria3')}}</li>
                <li class="testi blu">{{__('ui.foto')}}</li>
            </ul>
            </div>
            <livewire:create-announcement/>
        </div>
    </div>




</x-layout>