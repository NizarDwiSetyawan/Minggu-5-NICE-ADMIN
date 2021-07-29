@extends('app')

@section('content')
    <div class="jumbotron jumbotron-fluide">
        <div class="container">
              <h1 class="display-4">Nizar Setyawan Home Page</h1>
              <p class="lead">This is the Home Page</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach($pelajaran as$p)
            <li>{{ $p }}</li>
            @endforeach
        </ul>
    </div>
@endsection