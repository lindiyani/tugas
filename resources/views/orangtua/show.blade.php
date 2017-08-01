@extends('layouts.app')
@section ('content')
<div class="container">
<div class="row">
	<center><h1>data orang tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">data orang tua
<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div></div>
</div></div>

	<div class="panel-body">
		<form action="{{route('orangtua.update',$ortu->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">

				<label class="control-lable">nama ayah</label>
				<input type="text" name="a" value="{{$ortu->nama_ayah}}" class="form-control" readonly >
				</div>
				<div class="form-group">
				<label class="control-lable">nama ibu</label>
				<input type="text" name="b" value="{{$ortu->nama_ibu}}" class="form-control" readonly >
                </div>
                <div class="form-group">
				<label class="control-lable">umur ayah</label>
				<input type="text" name="c" value="{{$ortu->umur_ayah}}" class="form-control" readonly >
                 </div>

                <div class="form-group">
				<label class="control-lable">umur ibu</label>
				<input type="text" name="d" value="{{$ortu->umur_ibu}}" class="form-control" readonly >
                 </div>
                    <div class="form-group">
				<label class="control-lable">alamat</label>
				<textarea class="form-control"  name="e" readonly >
				{{$ortu->alamat}}</textarea>
                 </div>
                 
              
                 	</form>
          	</div>
         </div>
         </form>
         @endsection
