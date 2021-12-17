@extends('layouts.app')

@section('content')

<div class="page_banner news_banner">
    <div class="page_banner_content">
        <div class="page_banner_title">最新消息</div>
        <div class="page_banner_subtitle">News</div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="news_content_head">
            <div class="news_content_year_and_date">
                <div class="news_content_year">2021</div>
                <div class="news_content_date">12/13</div>
            </div>
            <div class="news_content_title">友不會問對題室止</div>
        </div>

        <div class="news_content_cover_img_wrap">
            <img src="{{ asset('img/about_banner.jpg') }}" class="news_content_cover_img">
        </div>

        <div class="news_content_text py-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti sed obcaecati id consectetur quasi vero, at nesciunt, alias maiores mollitia labore ex aliquam voluptatibus accusamus soluta dicta. Aspernatur soluta sint architecto pariatur sunt ipsum atque, mollitia suscipit est ipsa saepe, facere laboriosam veritatis magni necessitatibus alias culpa odit itaque.
        </div>
    </div>
</section>

@endsection