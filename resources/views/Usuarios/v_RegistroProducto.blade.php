@extends('layouts.l_navbar_principal')

@section('content')
<div class="container">
		<form action="" method="POST" accept-charset="utf-8">
			<div class="form-row">
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
							<option value="hora">Hora</option>
							<option value="dia">Dia</option>
							<option value="mes">Mes</option>
							<option value="semana">Semana</option>
							<option value="ano">Año</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Precio: </label>
						<input type="number" class="form-control" step="any" required="" placeholder="$">
					</div>
				</div>
				
				<div class="row align-items-end">
					<div class="col-md-3">
						<button type="submit" class="btn btn-primary" style="width: 180px;">Siguiente</button>
					</div>
				</div>
			</div>
		</form>
</div>
@endsection