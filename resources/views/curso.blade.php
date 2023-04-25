@extends('layouts.web')

@section('content')

<div class="grid grid-cols-3 gap-4">
    <div class="p-8 bg-gray-200 col-span-1">
        <ul class="flex flex-col">
            <li class="font-medium text-sm text-gay-400 uppercase mb-4">
                Contenido
            </li>
            @foreach ($curso->posts as $post)
            <li class="flex items-center bg-gray-300 text-gray-600 rounded-full p-6 mt-2">
                {{$post->name}}
                @if($post->free)
                    <span 
                        class="text-xs text-gray-700 font-semibold bg-lime-300 px-2 rounded-full ml-auto"
                    >
                        Gratis
                    </span>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
    <div class="text-gray-700 col-span-2">
        <img src="{{$curso->image}}">
        <h2 class="text-4xl">{{$curso->name}}</h2>
        <p>{{$curso->description}}</p>
        <div>
            <img 
                src="{{ $curso->user->avatar }}"
                class="h-10 w-10 rounded-full mr-2"
            >
            <div>
                <p class="text-gray-600 text-sm">{{$curso->user->name}}</p>
                <p class="text-gray-400 text-xs">{{$curso->created_at->diffForHumans()}}</p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 my-8">
            @foreach ($curso->similar() as $curso)
                <x-course-card :curso="$curso"/>
            @endforeach
        </div>
    </div>
</div>

<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos cursos</h1>
    <h2 class="text-xl text-gray-600">Formate online como profesional en tecnologia</h2>
</div>
    
<livewire:course-list>

@endSection