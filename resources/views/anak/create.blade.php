@extends('layouts.app')
@section ('content')
<div class="container">
<div class="row">
	<center><h1>Data anak</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data anak
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a>
	</div></div></div>
		<div class="panel-body">
			<form action="{{route('anak.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama </label>
				<input type="text" name="a" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-lable">Nama orangtua</label>
				<select class="form-control" name="b">
	                @foreach($ortu as $data)
    	            <option value="{{$data->id}}">{{$data->nama_ayah}} dan {{$data->nama_ibu}}
        	        </option>
           			@endforeach
               </select>
			</div>
            <div class="form-group">
				<label class="control-lable">Umur </label>
				<input type="text" name="c" class="form-control" required="">
            </div>
			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea name="d" class="form-control" required=""></textarea> 
            </div>
			<div class="form-group">
                 	<button type="submit" class="btn btn-success">simpan</button>
                 	<button type="reset" class="btn btn-success">reset</button>   		
              </div>
         </form>
         </div>
         </div>
         </div>

@endsection