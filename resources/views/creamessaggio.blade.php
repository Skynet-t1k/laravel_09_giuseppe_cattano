<x-layout>

    <div class="mt-5">

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form method="POST" action="{{route('message.create')}}">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Nome</label>
          <input name="username" type="text" class="form-control shadow" id="username">
        </div>
        <div class="mb-3">
          <label for="usermessage" class="form-label">Messaggio</label>
          <textarea class="form-control shadow" name="usermessage" id="usermessage" cols="50" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-light shadow">Submit</button>
      </form>
    </div>



</x-layout>