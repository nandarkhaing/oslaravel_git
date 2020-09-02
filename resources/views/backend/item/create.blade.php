@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group row {{ $errors->has('codeno')?'has-error':''}}">
					
					<label for="codeno" class="col-sm-2 col-form-label">CodeNo</label>
					
					<div class="col-sm-3">
						<input type="text" class="form-control" id="codeno" name="codeno">
						@error('codeno')
						<label class="text-danger">Required Codeno</label>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="name" name="name">
						@error('name')
						<label class="text-danger">Required Name</label>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="photo" class="col-sm-2 col-form-label">Photo</label>
					<div class="col-sm-3">
						<input type="file" class="form-control-file" id="photo" name="photo">
						@error('photo')
						<label class="text-danger">Required Photo</label>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="price" class="col-sm-2 col-form-label">Price</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="price" name="price">
						@error('price')
						<label class="text-danger">Required Price</label>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="discount" class="col-sm-2 col-form-label">Discount</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="discount"  name="discount">
						@error('discount')
						<label class="text-danger">Required Discount</label>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="description" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-3">
						<textarea class="form-control" id="description" name="description"></textarea>
						@error('description')
						<label class="text-danger">Required Description</label>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label for="brand" class="col-sm-2 col-form-label">Brand</label>
					<div class="col-sm-3">
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
					<label for="category" class="col-sm-2 col-form-label">SubCategory</label>
					<div class="col-sm-3">
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
				<input type="submit" name="create" value="Create" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection