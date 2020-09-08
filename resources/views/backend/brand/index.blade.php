@extends('backend.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mx-1 mb-0 text-gray-800">Brands List</h1>
	<a href="{{route('brands.create')}}" class="mx-1 btn btn-info">Add New</a>		
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php  $i=1; @endphp
				@foreach($brands as $brand)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$brand->name}}</td>
					<td><img src="{{asset($brand->photo)}}" class="img-fluid w-25"></td>
					<td>
						<a href="" class="btn btn-info">Detail</a>
						<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
						<form action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block" method="POST">
							@csrf
							@method("DELETE")
							<button class="btn btn-danger" type="submit">DELETE</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection