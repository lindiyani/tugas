@extends('layouts.app')
@section ('content')
<div class="row">
	<center><h1>data orang tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">data orang tua
<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div></div>
</div>

	<div class="panel-body">
		<form action="{{route('orangtua.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">nama ayah</label>
				<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
				<label class="control-lable">nama ibu</label>
				<input type="text" name="b" class="form-control" required="">
                </div>
                <div class="form-group">
				<label class="control-lable">umur ayah</label>
				<input type="text" name="c" class="form-control" required="">
                 </div>

                <div class="form-group">
				<label class="control-lable">umur ibu</label>
				<input type="number" name="d" class="form-control" required="">
                 </div>
                    <div class="form-group">
				<label class="control-lable">alamat</label>
				<textarea name="e" class="form-control" required=""></textarea> 
                 </div>
                 <div>
                 	<div class="form-group">
                 	<button type="submit" class="btn btn-success">simpan</button>
                 	<button type="reset" class="btn btn-success">reset</button>
                 		
                 	</div>
          	</div>
         </div>
@endsection