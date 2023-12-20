<x-layout>

<div class="conteiner bg-custom vh-100">
    <div class="row vh-100">
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
        <div class="col-12 d-flex align-items-center justify-content-center">
            <h1 class="text-center display-1 title-custom" data-aos="fade-down-left">Presto.it</h1>
        </div>
    </div>
</div>




</x-layout>