<x-layout>

    <div class="mt-5">

 @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form 
    method="POST" 
    action="{{route('message.store')}}"
    enctype="multipart/form-data"
    >
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Nome</label>
          <input name="username" type="text" value="{{old('username')}}" class="form-control shadow" id="username">
        </div>
        <div class="mb-3">
          <label for="userobject" class="form-label">Oggetto</label>
          <input name="userobject" type="text" value="{{old('userobject')}}" class="form-control shadow" id="userobject">
        </div>
        <div class="mb-3">
          <label for="usermessage" class="form-label">Messaggio</label>
          <textarea class="form-control shadow" name="usermessage" id="usermessage" cols="50" rows="10">{{old('usermessage')}}</textarea>
        </div>
        <div class="mb-3">
          <label for="img" class="form-label">Carica un immagine (opzionale)</label>
          <input name="img" class="form-control" type="file" id="img">
        </div>
        <button type="submit" class="btn btn-light shadow mt-3">Salva Messaggio</button>
      </form>
    </div>



</x-layout>