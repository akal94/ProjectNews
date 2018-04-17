@extends('layouts.template-index')

@section('konten')

  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="jumbotron">
          <div class="container">
            <h1>Hello, world!</h1>
            <p>Sosial dan Budaya</p>
            <p>
              <a class="btn btn-primary btn-lg">Learn more</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">

              @foreach($latestpost->slice(0, 5) as $berita)
              <li>
                <div class="media"> <a href="{{ route('berita.berita-nasional') }}" class="media-left"> <img alt="" src="{{ asset('images/post_img1.jpg') }}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">{{ $berita->judul }}</a> </div>
                </div>
              </li>
              <li>
              @endforeach

            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection