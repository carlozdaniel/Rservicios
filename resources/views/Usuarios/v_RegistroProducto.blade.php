@extends('layouts.l_navbar_principal')

@section('content')
<div class="container">
	<div class="" style="font-size: 30px; text-align: center; background-color: #04AEF2; color: #ffffff;">Informacion general</div>
		<form action="{{ route('registro_P2.store') }}" method="POST" class="mt-5" accept-charset="utf-8" enctype="multipart/form-data">@csrf
			<div class="form-row">
				<div class="col-md-3 mt-2">
						<label>Codigo del producto: </label>
							<input type="text" name="cod_producto" required="" class="form-control">
				</div>

				<div class="col-md-6 mt-2">
						<label>Titulo del producto: </label>
							<input type="text" name="N_producto" required="" class="form-control">
				</div>

				<div class="col-md-3 mt-2">
						<label>Unidades disponibles: </label>
							<input type="number" name="u_producto" required="" class="form-control">
				</div>

				<div class="col-md-12 mt-2">
						<label>Descripción</label>
							<textarea class="form-control" style=" min-height:200px; max-height:200px;" rows="3" name="descripcion"></textarea>
				</div>

				<div class="col-md-6 mt-2">
						<label>Tipo de renta</label><br>
						<select name="tip_renta" class="form-control" required="">
							<option value="">Selecciona un tipo de renta</option>
							<option value="1">Hora</option>
							<option value="2">Dia</option>
							<option value="3">Mes</option>
							<option value="4">Semana</option>
							<option value="5">Año</option>
						</select>
				</div>

				<div class="col-md-3 mt-2">
						<label>Precio: </label>
						<input type="number" name="precio" class="form-control" step="any" required="" placeholder="$">
				</div>

				<div class="col-md-3 mt-2">
						<label>Descuento: </label>
						<input type="number" name="descuento" class="form-control" step="any" placeholder="%">
				</div>

					<div class="col-md-11 col-sm-10 mt-3">
						<a class="nav-link col-md-1 btn-danger" style="border: 0px solid red; border-radius: 3px; justify-content: center; align-content: center; text-align: center;" href="{{ route('registro_s.index') }}">Regresar</a>
					</div>
				
					<div class="col-md-1 col-sm-2 mt-3">
						<button type="submit" class="btn btn-primary">Finalizar</button>
					</div>
			</div>
		</form>
</div>
@endsection