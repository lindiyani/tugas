<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
    @foreach($anak as $data)<hr>
    nama ibu:{{$data->nama_ibu}}<br>
    nama ayah:{{$data->nama_ayah}}<br>
    umur ibu:{{$data->umur_ibu}}<br>
    umur ayah:{{$data->umur_ibu}}<br><hr>
          @endforeach


</body>
</html>