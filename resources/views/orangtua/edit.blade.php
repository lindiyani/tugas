@extends('layouts.app')
@section ('content')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Orang Tua
<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div></div>
</div>

	<div class="panel-body">
		<form action="{{route('orangtua.update',$ortu->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">

				<label class="control-lable">Nama ayah</label>
				<input type="text" name="a" value="{{$ortu->nama_ayah}}" class="form-control" required="">
				</div>
				<div class="form-group">
				<label class="control-lable">Nama ibu</label>
				<input type="text" name="b" value="{{$ortu->nama_ibu}}" class="form-control" required="">
                </div>
                <div class="form-group">
				<label class="control-lable">Umur ayah</label>
				<input type="text" name="c" value="{{$ortu->umur_ayah}}" class="form-control" required="">
                 </div>

                <div class="form-group">
				<label class="control-lable">Umur ibu</label>
				<input type="text" name="d" value="{{$ortu->umur_ibu}}" class="form-control" required="">
                 </div>
                    <div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="e" required="">
				{{$ortu->alamat}}</textarea>
                 </div>
                 <div>
                 	<div class="form-group">
                 	<button type="submit" class="btn btn-success">simpan</button>
                 	<button type="reset" class="btn btn-success">reset</button>
                 		
                 	</div>
                 	</form>
          	</div>
         </div>
         </form>
         @endsection
