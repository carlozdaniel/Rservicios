@extends('layouts.l_navbar_principal')

@section('content')
<div class="container">
	<div class="" style="font-size: 30px; text-align: center; background-color: #04AEF2; color: #ffffff;">Informacion general</div>
		<form action="{{ route('registro_P2.store') }}" method="POST" class="mt-5" accept-charset="utf-8" enctype="multipart/form-data">@csrf
			<div class="form-row">
				<div class="col-md-3">
					<div class="form-group">
						<label>Codigo del producto: </label>
							<input type="text" name="cod_producto" required="" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Nombre del producto: </label>
							<input type="text" name="N_producto" required="" class="form-control">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label>Unidades disponibles: </label>
							<input type="number" name="u_producto" required="" class="form-control">
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label>Descripción</label>
							<textarea class="form-control" style=" min-height:200px; max-height:200px;" rows="3" name="descripcion"></textarea>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
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
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label>Precio: </label>
						<input type="number" name="precio" class="form-control" step="any" required="" placeholder="$">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label>Descuento: </label>
						<input type="number" name="descuento" class="form-control" step="any" placeholder="%">
					</div>
				</div>
				
				<div class="row align-items-end">
					<div class="col-md-3">
						<button type="submit" class="btn btn-primary" style="width: 180px;">Finalizar</button>
					</div>
				</div>
			</div>
		</form>
</div>
@endsection