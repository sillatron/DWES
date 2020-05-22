 @include('master') 
 <div class="container">
        @yield('content')
            <div class="row">
                @foreach($peliculas as $key => $pelicula)
                <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                    <a href="catalog/show/{{$pelicula->id}}">{{$pelicula->title}}</a>
                </div>
                @endforeach
            </div>
    </div>
