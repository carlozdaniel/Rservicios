@extends('layouts.l_navbar_principal')
@section('content')

 <div class="container">
 	<form method="POST" action="{{ route('registro_s.store') }}"> @csrf

 		<div class="form-row">
	 		<div class="col-md-4">
	 			<input type="checkbox" class="form-check-input" name="r1" value="1">
				<label for="">Renta de disfraces</label>
			</div>
					
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r2" value="2">
				<label for="">Renta de cañoneras multimedia</label>
			</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r3" value="3">
		 		<label for="">Alquiler de inflables y saltarines</label>
		 	</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r4" value="4">
		 		<label for="">Alquiler de camas elásticas</label>
			</div>

			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r5" value="5">
		 		<label for="">Renta de vehículos</label>
		 	</div>
			
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r6" value="6">
		 		<label for="">Alquiler de plantas ornamentales</label>
			</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r7" value="7">
		 		<label for="">Renta de casas y apartamentos</label>
		 	</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r8" value="8">
		 		<label for="">Renta de ranchos para veranear</label>
		 	</div>

			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r9" value="9">
		 		<label for="">Renta de bicicletas</label>
		 	</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r10" value="10">
		 		<label for="">Alquiler de obras de arte</label>
		 	</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r11" value="11">
		 		<label for="">Renta de fotocopiadoras</label>
		 	</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r12" value="12">
		 		<label for="">Alquiler de videojuegos</label>
		 	</div>
				
			<div class="col-md-4">
				<input type="checkbox" class="form-check-input" name="r13" value="13">
		 		<label for="">Alquiler de lavadoras y secadoras</label>
		 	</div>

		 	<div class="col-md-4">
		 		<input type="checkbox" class="form-check-input" name="r14" value="14">
		 		<label for="">Renta de trajes para bodas</label>
		 	</div>

		 	<div class="col-md-4">
		 		<input type="checkbox" class="form-check-input" name="r15" value="15">
		 		<label for="">Renta de mobiliario para celebraciones</label>
		 	</div>

		 	<div class="col-md-4">
		 		<input type="checkbox" class="form-check-input" name="r16" value="16">
		 		<label for="">Alquiler de andamios</label>
		 	</div>

		 	<div class="col-md-4">
		 		<input type="checkbox" class="form-check-input" name="r17" value="17">
		 		<label for="">Alquiler de locales comerciales</label>
		 	</div>

		 	<div class="col-md-4">
		 		<input type="checkbox" class="form-check-input" name="r18" value="18">
		 		<label for="">Alquiler de pelucas</label>
		 	</div>

		 	<div class="col-md-4">
		 		<input type="checkbox" class="form-check-input" name="r19" value="19">
		 		<label for="">Alquiler de canchas de fútbol</label>
		 	</div>

		 	<div class="col-md-4">
		 		<input type="checkbox" class="form-check-input" name="r20" value="20">
		 		<label for="">Renta de sillas de ruedas</label>
		 	</div>

		 	<div class="col-md-offset-12">
		 		<button type="submit" class="btn btn-primary mt-5" style="width: 225px;">Siguiente</button>
		 	</div>
		 </div>
	</form>
 </div>
@endsection