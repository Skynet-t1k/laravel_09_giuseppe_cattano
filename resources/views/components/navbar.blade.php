
 
  <nav class="navbar navbar-expand-lg bg-body-tertiary nav-bg shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}"><img src="media/logo_flow.webp" alt="Logo" width="60" height="54" class="d-inline-block align-text-top rounded-4"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
          <li class="nav-item">
            <a class="nav-link {{Route::is('homepage') ? "active" : ""}}" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is('message.view') ? "active" : ""}}" href="{{route('message.view')}}">Visualizza Pensiero</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is('message.create') ? "active" : ""}}" href="{{route('message.create')}}">Crea Pensiero</a>
          </li>
        </ul>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             @auth
                 {{Auth::user()->name}}
             @endauth
             @guest
                  Accedi/Registrati
             @endguest
            </a>
            <ul class="dropdown-menu ms-3 mt-2">

              @guest

              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            
              @endguest

              @auth
                  
              <form class="dropdown-item" 
                    action="{{route('logout')}}"
                    method="POST"
              >@csrf
              <button class="dropdown-item p-0 ">Logout</button>
              </form>
            
              @endauth
          
            </ul>
          </div>
        </div>
    </div>
  </nav>