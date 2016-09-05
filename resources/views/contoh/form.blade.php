<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>

<body>

	<div class="container" style="width: 50%; margin-top: 10rem">	
		<!-- Form mengunakan method POST untuk mengirimkan data -->
		<form action="contoh-post" method="post">

			<!-- Untuk validasi form di laravel
				 Jika tidak ada ini, maka form tidak diizinkan untuk mengirimkan data -->
			{{ csrf_field() }}
			
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="nama" class="form-control" placeholder="Nama anda">
					<span class="input-group-addon"><i class="gylphicon glyphicon-user"></i></span>
				</div>
			</div>

			<div class="form-group">
				<div class="input-group">
					<input type="text" name="judul" class="form-control" placeholder="Judul">
					<span class="input-group-addon"><i class="glyphicon glyphicon-header"></i></span>
				</div>
			</div>

			<div class="form-group">
				<textarea name="keterangan" placeholder="Keterangan" class="form-control"></textarea>
			
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default">Kirim</button>
			</div>

		</form>

	</div>

</body>