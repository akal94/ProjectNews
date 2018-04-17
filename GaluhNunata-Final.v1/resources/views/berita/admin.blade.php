<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Panel title</h3>
	</div>

	@foreach($pass as $berita)
	<div class="panel-body">
		{{ $berita->judul }} <br>
		{{ $berita->konten }}
	</div>
	@endforeach
</div>