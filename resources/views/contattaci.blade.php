<x-layout>

    <div class="conteiner bg-conteiner h-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="title-custom display-3 text-center mt-3">{{__('ui.contattaci')}}</h1>
            </div>
            <div class="col-12 bg-dropdown">
                <strong class="detail-custom text-center p-5">{{__('ui.intro')}}</strong>
            </div>
            <div class="col-12">
                <h2 class="detail-custom display-5 text-center mt-3">{{__('ui.aspe')}}</h2>
            </div>
            <div class="col-5">
                <ul class="p-custom2">
                    <li>
                      <strong>{{__('ui.strong1')}}</strong>  {{__('ui.assistenza')}}
                    </li>
                    <li>
                       <strong>{{__('ui.strong2')}} </strong> {{__('ui.risposta')}}
                    </li>
                    <li>
                        <strong>{{__('ui.strong3')}}</strong> {{__('ui.soluzioni')}}
                    </li>
                    <li>
                       <strong> {{__('ui.strong4')}}</strong> {{__('ui.guida')}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="row vh-100 bg-conteiner justify-content-center">

            <div class="col-12 mt-5">
                <h3 class="text-center title-custom display-2">{{__('ui.contattaci2')}}</h3>
            </div>

            <div class="col-6">
                <form action="">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label label-custom">{{__('ui.nome')}}</label>
                        <input name="name" type="text" class="form-control" id="name">
                      </div>
                    <div class="mb-3">
                      <label for="email" class="form-label label-custom">Email</label>
                      <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="label-custom">{{__('ui.descrizione')}}</label>
                        <textarea  type="text" class="form-control" style="height: 100px"></textarea>
                      </div>

                      <button class="btn btn-custom w-100" type="submit">{{__('ui.richiesta')}}</button>
                </form>
            </div>
        </div>
    </div>







  
    
  
    
 


</x-layout>