<nav class="navbar navbar-expand-lg nav-custom">
    <div class="container-fluid">
      <a class="navbar-brand link-custom" href="#">Presto.It</a>
      <button class="navbar-toggler buttonav-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse link-custom" id="navbarNav">
        <ul class="navbar-nav d-flex align-items-center">
          <li class="nav-item ">
            <a class="link-custom active " aria-current="page" href="/">Home</a>
          </li>
          @auth
          <li class="nav-item ">
            <a class="link-custom active " href="{{route('announcement.create')}}">Crea Annuncio</a>
          </li>
     
          @endauth
          <li class="nav-item ">
            <a class="link-custom active " href="{{route('all_announcements')}}">Tutti gli annunci</a>
          </li>
          <li class="nav-item dropdown me-2">
            <a class="link-custom dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu " wire:model.defer="category">
                @foreach ($categories as $category)
                    
                <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a></li>
              
              @endforeach
            </ul>
          </li>
          {{-- {{route('announcements.search')}} --}}
          <form class="d-flex" method="GET" action="{{route('announcements.search')}}">
            @csrf
            <input name="searched" class="form-control me-2" type="search" placeholder="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </ul>
        <ul class="navbar-nav ms-auto link-custom d-flex align-items-center">
            @guest
                
         
            <li class="nav-item ">
                <a class="link-custom active " href="/login">Accedi</a>
              </li>
              <li class="nav-item ">
                <a class="link-custom active " href="/register">Registrati</a>
              </li>
              @endguest

              @auth
              @if (Auth::user()->is_revisor)
             

            
              <li class="nav-item me-2">
                <a class="link-custom btn btn-outline-primary position-relative" aria-current="page"  href="{{route('revisor.index')}}">Zona Revisore 
                    <span class="position-absolute badge rounded-pill bg-danger">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span></span>
                </a>
              </li>
            @endif
                  
            
              <li class="nav-item dropdown dropstart">
                <a class="link-custom dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ciao
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
        </ul>
      </div>
    </div>
  </nav>