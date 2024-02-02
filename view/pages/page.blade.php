@extends('layout')

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-7xl">
        <h1>{{$page->name}}</h1>
        <div>
            {!! $page->content !!}
        </div>
    </div>
</div>

@endsection