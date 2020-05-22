 @include('master') 
 <div class="container">
        @yield('content')
            <div class="row">
          
                <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                      {{csrf_field()}}
                    <form action="{{url('/movie/catalog/store')}}">
                        Titulo:
                        <input type="text" name="title" class="form-control"><br>
                        Año:
                        <input type="text" name="year" class="form-control"><br>
                        Director:
                        <input type="text" name="director" class="form-control"><br>
                        Poster:
                        <input type="text" name="poster" class="form-control"><br>
                        Resumen:
                        <textarea type="textarea" name="synopsis" class="form-control"></textarea>
                        
                        <input type="submit" value="Enviar" class="btn btn primary form-control"/>
                    </form>

                </div>
          
            </div>
    </div>

