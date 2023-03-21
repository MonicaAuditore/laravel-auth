@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col mb-4">
            <h1>Crea progetto</h1>
        </div>
    </div>
    @if ($errors->any())
    <div class="row mb-4">
        <div class="col">
            <div class="alert altert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
    <div class="row mb-4">
        <div class="col">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo del progetto</label>
                    <input type="text" class="form-control" name="title" id="title" required maxlenght="128" placeholder="Inserisci il titolo del progetto...">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Spiegazione del progetto</label>
                    <textarea class="form-control" name="content" id="content" rows="15" required placeholder="Inserisci la spiegazione del progetto..."></textarea>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-success mb-3">Aggiungi progetto</button>
                  </div>

            </form>
        </div>
    </div>
    
</div>
@endsection