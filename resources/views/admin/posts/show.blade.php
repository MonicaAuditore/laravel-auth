@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>{{ $post->title }}</h1>
            <h6>{{ $post->slug }}</h6>
            <p>{{ $post->content }}</p>
            
        </div>
    </div>
</div>
@endsection