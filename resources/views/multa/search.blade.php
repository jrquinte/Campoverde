<form action=""method="GET"> 
{!! Form::open(array('url'=>'multa','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
   <div class="form-group">
   <div class="input-group">
   <input type="text" name="searchText" class="form-control"
   placeholder="Consultar por: nombre, apellidos, número de identificación o fecha de registro" value="{{$searchText}}">
     <span class="input-group-btn">
        <button type="submit"class="btn btn-primary">Buscar</button>
    </span>
    </div>
    </div>
</form>
{{Form::close()}}
