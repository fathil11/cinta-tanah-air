@extends('layouts.blog')

@section('judul')
Berita {{ $category }}
@endsection

@section('header')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Berita {{ $category }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('section')
<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ($articles as $article)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{ asset('img/blog') . '/' . $article->banner_path }}"
                                alt="">
                            <a href="{{ url('lihat-artikel') . '/' . $article->slug }}" class="blog_item_date">
                                <h3>{{ date('d', strtotime($article->created_at)) }}</h3>
                                <p>{{ substr(date('F', strtotime($article->created_at)), 0, 3) }}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{ url('lihat-artikel') . '/' . $article->slug }}">
                                <h2>{{ $article->title }}</h2>
                            </a>
                            <p>
                                @php
                                $tny_art = new HtmlText($article->article);
                                @endphp
                                {{ substr($tiny_art->getText(), 0, 30) . "..." }}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="far fa-user"></i> @php
                                        $temp = array();
                                        foreach($article->category as $cats){
                                        $temp[] = $cats->category;
                                        }
                                        $cat = implode(',', $temp)
                                        @endphp
                                        {{ $cat }}</a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        {{ $articles->links() }}
                    </nav>
                </div>
            </div>
            @endsection
