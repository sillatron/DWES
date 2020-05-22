 @include('master') 
        @yield('content')
            <div class="row">
          
                <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                      {{csrf_field()}}
                    <form action="{{ url('movie/catalog/save/'.$p->id) }}" method="GET">
                        Titulo:
                        <input type="text" name="title" value="{{$p->title}}" class="form-control"><br>
                        Año:
                        <input type="text" name="year" value="{{$p->year}}" class="form-control"><br>
                        Director:
                        <input type="text" name="director" value="{{$p->director}}" class="form-control"><br>
                        Poster:
                        <input type="text" name="poster" value="{{$p->poster}}" class="form-control"><br>
                        
                        Resumen:
                        <textarea type="textarea" name="synopsis" class="form-control">{{$p->synopsis}}</textarea>
                        
                        <input type="submit" value="Enviar" class="btn btn primary form-control"/>
                    </form>

                </div>
          
            </div>


