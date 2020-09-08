@extends('backend.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mx-1 mb-0 text-gray-800">Items List</h1>
			<a href="{{route('items.create')}}" class="mx-1 btn btn-info">Add New</a>		
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>Codeno</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php  $i=1; @endphp
				@foreach($items as $item)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$item->codeno}}</td>
					<td>{{$item->name}}</td>
					<td><img src="{{asset($item->photo)}}" class="img-fluid w-25"></td>
					<td>{{$item->price}}MMK</td>
					<td>
						<a href="" class="btn btn-info">Detail</a>
						<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
						<form action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block" method="POST">
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