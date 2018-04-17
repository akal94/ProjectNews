@extends('layouts.template-index')

@section('konten')

 <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img4.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img3.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
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
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">{{ $berita->judul }}</a> </div>
                </div>
              </li>
              @endforeach
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">

          <!-- Awal Berita Nasional-->
          <div class="single_post_content">
            <h2><span>Berita Nasional</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">

                @foreach($beritanasional->slice(0, 1) as $berita1)
                <li>
                  <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img1.jpg"> <span class="overlay"></span> <span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{ \Carbon\Carbon::parse($berita1->updated_at)->format('l, d F Y H:i')}} </a>
                    <figcaption> <a href="pages/single_page.html">{{ $berita1->judul }}</a> </figcaption>
                    <p> {{ str_limit($berita1->konten,100) }}</p>
                  </figure>
                </li>
                @endforeach
              </ul>
            </div>

            <div class="single_post_content_right">
              <ul class="spost_nav">

                @foreach($beritanasional->slice(1, 4) as $berita1)
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">{{ $berita->judul }}</a> </div>
                  </div>
                </li>
                @endforeach

              </ul>
            </div>
          </div>
          <!-- Akhir Berita Nasional-->

          <div class="fashion_technology_area">

            <!-- Awal Sosial Budaya-->
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Sosial Budaya</span></h2>
                <ul class="business_catgnav wow fadeInDown">

                  @foreach($sosialbudaya->slice(0, 1) as $berita2)
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img2.jpg"> <span class="overlay"></span> <span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{ $berita2->updated_at }} </a>
                      <figcaption> <a href="pages/single_page.html">{{$berita2->judul}}</a> </figcaption>
                      <p>{{str_limit($berita2->konten,100)}}</p>
                    </figure>
                  </li>
                  @endforeach
                </ul>

                <ul class="spost_nav">

                  @foreach($sosialbudaya->slice(1, 4) as $berita2)
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title">{{$berita2->judul}}</a> </div>
                    </div>
                  </li>
                  @endforeach
                
                </ul>
              </div>
            </div>
            <!-- Akhir Sosial Budaya-->

            <!-- Awal Tokoh dan Aktivis-->
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Tokoh dan Aktivis</span></h2>
                <ul class="business_catgnav">

                  @foreach($tokohdanaktivis->slice(0, 1) as $berita3)
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> <span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{ $berita2->updated_at }} </a>
                      <figcaption> <a href="pages/single_page.html">{{ $berita3->judul }}</a> </figcaption>
                      <p>{{ $berita3->konten }}</p>
                    </figure>
                  </li>
                  @endforeach

                </ul>
                <ul class="spost_nav">
                  @foreach($tokohdanaktivis->slice(1, 4) as $berita3)
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title">{{$berita3->judul}}</a> </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- Akhir Tokoh dan Aktivis-->

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>

        </aside>
      </div>
    </div>
  </section>


@endsection