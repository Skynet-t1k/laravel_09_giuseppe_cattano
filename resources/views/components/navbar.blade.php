
<nav class="navbar navbar-expand-lg nav-bg mt-5 shadow">
    
      <a class="navbar-brand ps-3" href="{{route('homepage')}}"><img src="media/logo_flow.webp" alt="Logo" width="60" height="54" class="d-inline-block align-text-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link {{Route::is('homepage') ? "active" : ""}}" aria-current="page" href="{{route('homepage')}}">Home</a>
          <a class="nav-link {{Route::is('message.view') ? "active" : ""}} " href="{{route('message.view')}}">Visualizza Pensiero</a>
          <a class="nav-link {{Route::is('message.create') ? "active" : ""}}" href="{{route('message.create')}}">Crea Pensiero</a>
         </div>
         <div width="40" height="34"></div>
      </div>
    
  </nav>