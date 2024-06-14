<x-layout>

    <h1 class="my-5">Messaggi di felicita'</h1>
    <div class="row flex-row">
    @foreach ($messages as $message)
    <div class="col12 col-md-4">
      <div class="card shadow m-3" style="width: 18rem;">
        <div class="card-body ">
          <h5 class="card-title">{{$message->name}}</h5>
          <p class="card-text">{{$message->message}}</p>
         </div>
      </div>
    </div>  
    @endforeach

</div>

</x-layout>