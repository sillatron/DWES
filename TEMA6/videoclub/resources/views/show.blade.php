 @include('master') 
    <div class="container">
        @yield('content')
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{$peliculas->poster}}">
                </div>
                <div class="col-sm-8">
                    <h1>{{$peliculas->title}}</h1>
                    <p>{{$peliculas->year}}</p>
                    <p>{{$peliculas->director}}</p>
                    <p>{{$peliculas->synopsis}}</p>
                     @if($peliculas->rented)
                     <p>
                        Película alquilada
                        @else
                        Película disponible
                        @endif
                     </p>
        @if($peliculas->rented)
        <a href="{{url('catalog/return/'.$peliculas->id)}}" class="btn btn-default btn-danger">Devolver la película</a>
        @else
        <a href="{{url('catalog/return/'.$peliculas->id)}}" class="btn btn-default btn-primary">Alquilar</a>
        @endif
        <a href="{{url('/catalog/edit/'.$peliculas->id)}}" class="btn btn-default btn-suscess">Editar</a>        
                </div>
                
            </div>
    </div>
