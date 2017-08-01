@extends('layouts.app')
@section ('content')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Orang Tua
<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div></div>
</div>

	]
			<div class="form-group">
				<label class="control-lable">Nama ayah</label>
				<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
				<label class="control-lable">Nama ibu</label>
				<input type="text" name="b" class="form-control" required="">
                </div>
                <div class="form-group">
				<label class="control-lable">Umur ayah</label>
				<input type="text" name="c" class="form-control" required="">
                 </div>

                <div class="form-group">
				<label class="control-lable">Umur ibu</label>
				<input type="number" name="d" class="form-control" required="">
                 </div>
                    <div class="form-group">
				<label class="control-lable">Alamat</label>
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