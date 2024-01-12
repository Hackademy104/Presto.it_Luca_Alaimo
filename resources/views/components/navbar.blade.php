<nav class="navbar navbar-expand-lg nav-custom fixed-top " id="navbar1">
    <div class="container-fluid">
      <div class="logo">
         
      </div>
  
      <button class="navbar-toggler buttonav-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarNav">
        
        <ul class="navbar-nav d-flex align-items-center">
          <li class="nav-item ">
            <a class="link-custom active ms-4 " aria-current="page" href="/">Home</a>
          </li>
          @auth
          <li class="nav-item ">
            <a class="link-custom active " href="{{route('announcement.create')}}">{{__('ui.link1')}}</a>
          </li>
     
          @endauth
          <li class="nav-item ">
            <a class="link-custom active " href="{{route('all_announcements')}}">{{__('ui.link2')}}</a>
          </li>
          <li class="nav-item dropdown me-2">
            <a class="link-custom dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.link3')}}
            </a>
            <ul class="dropdown-menu bg-dropdown" wire:model.defer="category">
                @foreach ($categories as $category)
                    
                <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a></li>
              
              @endforeach
         
            </ul>
          </li>
       
       
        </ul>

  
   
        <ul class="navbar-nav ms-auto d-flex align-items-center ">
          <li class="nav-item dropdown">
            <a class="link-custom dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.lingua')}}
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <x-_locale lang="en"/>
              </li>
              <li class="nav-item">
                <x-_locale lang="it"/>
              </li>
              <li class="nav-item">
                <x-_locale lang="es"/>
              </li>
            </ul>
          </li>
            @guest
                
         
            <li class="nav-item ">
                <a class="link-custom active " href="/login">{{__('ui.link6')}}</a>
              </li>
              <li class="nav-item ">
                <a class="link-custom active me-3" href="/register">{{__('ui.link7')}}</a>
              </li>
              @endguest

              @auth
              @if (Auth::user()->is_revisor)
             

            
              <li class="nav-item me-3">
                <a class="link-custom position-relative " aria-current="page"  href="{{route('revisor.index')}}">{{__('ui.link8')}}
                    <span class="position-absolute badge rounded-pill bg-danger">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span></span>
                </a>
              </li>
            @endif
                  
            
              <li class="nav-item dropdown dropdown">
                <a class="link-custom dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{__('ui.link9')}}
                  {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu">
                    <form action="/logout" method="POST">
                        @csrf
                        <li><button class="dropdown-item" type="submit">Logout</button></li>
                  
                    </form>
                </ul>
              </li>

              @endauth
              <form class="ms-auto d-flex align-items-center" method="GET" action="{{route('announcements.search')}}">
                @csrf
                <div class="search">
                  <i class="fa-solid fa-magnifying-glass fa-lg searchBtn ms-2 me-4 icona icona-search"></i>
                 
                </div>
                <div class="searchBox ">
                  <input name="searched" type="search" placeholder="Search">  
                  <i class="fa-solid fa-xmark fa-lg me-3  ms-2 icona icona-close " id="closeBtn"></i>
                  </div>
                {{-- <button class="btn btn-outline-primary" type="submit">Search</button> --}}
              </form>
            </ul>
      </div>

    </div>
   
  </nav>




   {{-- <button class="btn btn-outline-primary" type="submit">Search</button> --}}