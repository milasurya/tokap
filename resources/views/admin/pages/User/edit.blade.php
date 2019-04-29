@extends('admin.main')
@section('title','User Edit')
@section('content')
<h1>User <small class="text-muted">Edit</small></h1>
<hr>

@if(session('result') == 'fail')
<div class="alter alter-danger alter-dismissible fade show">
	<strong>Failed!</strong> Gagal diupdate.
	<button type="button" class="close" data-dismiss="alter">
		&times;
	</button>
</div>
@endif

<div class="row">
	<div class="col-md-6">
		<form method="POST" action="{{ route('admin.user.edit',['id'=>$rc->id]) }}">
			{{ csrf_field() }}
			<div class="card">

				<div class="card-header">
					<h5>Ubah Data Kategori</h5>
				</div><!--End Card Header-->
			

				<div class="card-body">
					
					<div class="form-group form-label-group">
						<input type="text" name="kategori"
						class="form-control {{ $errors->has('kategori')?'is-invalid':'' }}"
						value="{{ old('kategori',$rc->kategori) }}"
						id="iKategori" placeholder="Kategori" required>
						<label for="iKategori">Kategori</label>
						@if($errors->has('Kategori'))
						<div class="invalid-feedback">{{ $errors->first('kategori') }}</div>
						@endif 
					</div><!--End Form Group-->
				</div><!--End Card Body-->

				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Update</button>
				</div><!-- End Card Footer-->


			<div><!--End Card-->
		</form>
	</div>
</div>

@endsection