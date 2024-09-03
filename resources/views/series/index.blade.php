<x-layout title="Series">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar nova série </a>
    
    <ul class="list-group">
        @foreach($series as $key)
            <li class="list-group-item" >{{$key}}</li>
            @endforeach
    </ul>
</x-layout>    