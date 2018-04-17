@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="" method="POST" role="form">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="">Kategori</label>
				<select name="category_id" id="inputCate" class="form-control" required="required">
					@foreach($kategoris as $kategori)
						<option value="{{ $kategori->id}}"> {{ $kategori->nama_kategori }} </option>
					@endforeach
				</select>

			</div>

			<div class="form-group">
				<label for="">Judul</label>
				<input type="text" name="title" class="form-control" placeholder="Judul">
			</div>

			<div class="form-group">
				<label for="">Konten</label>
				<textarea name="content" rows="11" type="text" class="form-control" placeholder="Konten"> </textarea>
			</div>
		
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection