<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
       @foreach($ortu as $data)<hr>
       nama ibu :{{$data->nama_ibu}}<br>
       nama ayah:{{$data->nama_ayah}}<br>
       umur ibu :{{$data->umur_ibu}}<br>
       umur ayah :{{$data->umur_ayah}}<br><hr>
       @endforeach
</body>
</html>