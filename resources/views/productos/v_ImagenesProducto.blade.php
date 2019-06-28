@extends('layouts.l_navbar_principal')
@section('content')
@section('links')
<link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/11_iconos/style.css') }}">
<script src="{{ asset('js/dropzone.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<script src="{{ asset('js/dropzone_confi.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<style type="text/css"> 
.punteado{ 
  border-style: dotted; 
  	border-width: 2px; 
  	border-color: #0367A5; 
  	background-color: cc3366; 
  	font-family: verdana, arial; 
  	font-size: 10pt; 
} 
</style>
@endsection
	<div class="container">
		<div class="mt-3" style="font-size: 30px; text-align: center; background-color: #04AEF2; color: #ffffff;">Imagenes</div>
		<div class="row">
			<div class="col-md-12 col-md-offset-0 mt-5">
				<div class="panel panel-default">
					<div class="panel-heading">Imagenes</div>	
					<div class="panel-body">
						<div id="template">
							<form action="{{ route('files.store') }}" method="POST" class="dropzone punteado" id="my-dropzone" accept-charset="utf-8">@csrf
								
								<input type="hidden" name="id" value="{{ $id_producto }}">

								<div class="dz-message">
									<i class="icon-images" style="width: 100px; font-size: 50px; color: #04AEF2;"></i>
								</div>
								<div class="dropzone-previews"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-7 mt-5">
				<button class="btn btn-primary"><a href="{{  route('principal') }}" style="color: #ffffff;" class="btn-link nav-link">Finalizar</a></button>
			</div>
		</div>
	</div>
@endsection