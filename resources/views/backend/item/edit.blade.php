@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row ">
					<label for="codeno" class="col-sm-2 col-form-label">CodeNo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="codeno" name="codeno" value="{{$item->codeno}}" readonly="readonly">
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" value="{{$item->name}}">
					</div>
				</div>

				<div class="form-group row">
					<label for="photo" class="col-sm-2 col-form-label">Photo</label>
					<div class="col-sm-10">
						<input type="file" class="form-control-file" id="photo" name="photo" value="{{$item->photo}}">
						<img src="{{asset($item->photo)}}">
						<input type="hidden" name="oldphoto" value="{{$item->photo}}">
					</div>
				</div>

				<div class="form-group row">
					<label for="price" class="col-sm-2 col-form-label">Price</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="price" name="price" value="{{$item->price}}">
					</div>
				</div>

				<div class="form-group row">
					<label for="discount" class="col-sm-2 col-form-label">Discount</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="discount"  name="discount" value="{{$item->discount}}">
					</div>
				</div>

				<div class="form-group row">
					<label for="description" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="description" name="description">{{$item->description}}</textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<select class="form-control form-control-md" id="inputBrand" name="brand">
							<optgroup label="Choose brand">
								@foreach($brands as $brand)
								<option value="{{$brand->id}}">{{$brand->name}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
							<optgroup label="Choose subcategory">
								@foreach($subcategories as $subcategory)
								<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>
				<br>
				<input type="submit" name="create" value="Update" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection