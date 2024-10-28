@extends("layouts.app")

@section("page-title", "Movies")

@section("main-content")

<main>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo Originale</th>
                <th scope="col">Lingua Originale</th>
                <th scope="col">Data di Uscita</th>
                <th scope="col">Voto</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($movies as $movie)
            <tr>
                <th scope="row">{{$movie["id"]}}</th>
                <td>{{$movie["title"]}}</td>
                <td>{{$movie["original_title"]}}</td>
                <td>{{$movie["nationality"]}}</td>
                <td>{{$movie["date"]}}</td>
                <td>{{$movie["vote"]}}</td>
            </tr>
            @empty

            @endforelse
            </tbody>
          </table>
    </div>
</main>

@endsection
