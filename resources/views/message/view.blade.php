<x-layout>

    <h1 class="my-5">Messaggi di felicita'</h1>
    <div class="row flex-row">
    @foreach ($messages as $message)
    <div class="col12 col-md-4">
    <x-card 
    :$message
    />
    </div>  
    @endforeach

</div>

</x-layout>