<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
     @foreach($ortu as $data)<hr>
   nama ibu:{{$data->nama_ibu}}<br>
    nama ayah:{{$data->nama_ayah}}<br>
    umur ibu:{{$data->umur_ibu}}<br>
    umur ayah:{{$data->umur_ibu}}<br>
    nama anak :
         @foreach($data->anak as $key)
         <li>{{$key->nama}}</li>
         @endforeach
         <hr>
         @endforeach

    

</body>
</html>