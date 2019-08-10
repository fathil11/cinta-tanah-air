@extends('layouts.dashboard')

@section('title')
@yield('judul')
@endsection

@section('content')

@yield('header')

@yield('section')

<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari berita ...">
                        <div class="input-group-append">
                            <button class="btn" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_4" type="submit">Cari Berita</button>
            </form>
        </aside>

        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Kategori Berita</h4>
            <ul class="list cat-list">
                <li>
                    <a href="{{ url('berita/budaya') }}" class="d-flex">
                        <p>Budaya</p>
                        <p>(37)</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('berita/pemberdayaan') }}" class="d-flex">
                        <p>Pemberdayaan</p>
                        <p>(10)</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('berita/pendidikan') }}" class="d-flex">
                        <p>Pendidikan</p>
                        <p>(3)</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('berita/sosial') }}" class="d-flex">
                        <p>Sosial</p>
                        <p>(11)</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('berita/hukum') }}" class="d-flex">
                        <p>Hukum</p>
                        <p>(21)</p>
                    </a>
                </li>
            </ul>
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Berita Terbaru</h3>
            <div class="media post_item">
                <img src="img/post/post_1.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>From life was you fish...</h3>
                    </a>
                    <p>January 12, 2019</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/post/post_2.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>The Amazing Hubble</h3>
                    </a>
                    <p>02 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/post/post_3.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Astronomy Or Astrology</h3>
                    </a>
                    <p>03 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/post/post_4.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Asteroids telescope</h3>
                    </a>
                    <p>01 Hours ago</p>
                </div>
            </div>
        </aside>

        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title">Ikuti Setiap Berita Terbaru Kami</h4>

            <form action="#">
                <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'" placeholder='Masukan email' required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_4" type="submit">Berlangganan</button>
            </form>
        </aside>
    </div>
</div>
</div>
</div>
</section>
<!--================Article Area =================-->
@endsection
