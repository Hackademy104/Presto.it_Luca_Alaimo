<x-layout>

    <div class="conteiner vh-100 bg-custom2">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1 title-custom">{{__('ui.link7')}}</h1>
            </div>
            <div class="col-6">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label label-custom">{{__('ui.utente')}}</label>
                        <input name="name" type="text" class="form-control" id="name">
                      </div>
                    <div class="mb-3">
                      <label for="email" class="form-label label-custom">Email</label>
                      <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label label-custom">Password</label>
                      <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label label-custom">{{__('ui.conferma')}}</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-custom w-100">{{__('ui.link7')}}</button>
                  </form>
            </div>
        </div>
    </div>
    
    
    
    
    </x-layout>