@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">data anak
		<div class="panel-title pull-right"><a href="/anak/create">tambah data anak</a>
		</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>nama</th>
						<th>nama_orangtua</th>
						<th>umur</th>
						<th>alamat</th>
						<th colspan="3">Action</th>
					</tr>
					</thead>
					<tbody>
					@foreach($anak as $data)
					<tr>
					<td>{{$data->nama}}</td>
					<td>{{$data->orangtua->nama_ayah}} dan {{$data->orangtua->nama_ibu}}</td>
				    <td>{{$data->umur}}</td>
					<td>{{$data->alamat}}</td>
                     <td>
                      <a class="btn btn-warning" href="/anak/{{$data->id}}/edit">Edit</a></td>
                      	<td>
                       	<a class="btn btn-primary" href="/anak/{{$data->id}}">show</a>
                       	</td>
                       	<td>
                       	<form action="{{route('anak.destroy',$data->id)}}" method="post">
                       	<input type="hidden" name="_method" value="DELETE">
                       	<input type="hidden" name="_token">
                       	<input class="btn btn-danger" type="submit" value="delete">{{csrf_field()}}
                       	</form>
                       	</td>
                       	</tr>	
					@endforeach
						</td>

					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection