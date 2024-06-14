


<div class="card shadow m-3" style="width: 18rem;">
    <img src="{{Storage::url($message->img)}}" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$message->userobject}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$message->username}}</h6>
      <p class="card-text">{{$message->usermessage}}</p>
    </div>
</div>