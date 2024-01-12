<x-layout>

    <div class="conteiner vh-100 bg-custom2">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1 class="text-center display-1 title-custom">{{__('ui.accedi')}}</h1>
                <p class="testi blu">{{__('ui.accedi2')}}</p>
            </div>
            <div class="col-6">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label label-custom">Email</label>
                      <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label label-custom">Password</label>
                      <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div>
                      <p class="testi blu"> {{__('ui.registrati')}} <strong class="corsivo"><a href="{{route('register')}}">{{__('ui.link7')}}</a></strong></p>
                    </div>
                    <button type="submit" class="btn btn-custom w-100">{{__('ui.accedi')}}</button>
                  </form>
            </div>
        </div>
    </div>
    
    
    
    
    </x-layout>