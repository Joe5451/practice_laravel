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
        <a href="{{ route('news_content') }}" class="news_list">
            <div class="news_list_content">
                <div class="news_list_year_and_date">
                    <div class="news_list_year">2021</div>
                    <div class="news_list_date">12/13</div>
                </div>
                <div class="news_list_text">
                    <div class="news_list_title">友不會問對題室止</div>
                    <div class="news_list_summary">
                        己也同價不人希，該到銀出定過……備如林中已國技之。
                        任我之奇職且只次地，太法教省此式二代活公投格東業，推新樹勢快作速速和他外，就的裡、因地國行空顧任些產、的服立，程上資電立近主，表的何身香個！別一是消器故了然去想、得該能教我元配質建腳再。門的令，為亞過香，性定利不一天東我坐。
                    </div>
                </div>
            </div>
            <div class="news_list_img_wrap">
                <img src="{{ asset('img/about_banner.jpg') }}" alt="最新消息..." class="news_list_img">
            </div>
        </a>
        <a href="{{ route('news_content') }}" class="news_list">
            <div class="news_list_content">
                <div class="news_list_year_and_date">
                    <div class="news_list_year">2021</div>
                    <div class="news_list_date">12/13</div>
                </div>
                <div class="news_list_text">
                    <div class="news_list_title">友不會問對題室止</div>
                    <div class="news_list_summary">
                        己也同價不人希，該到銀出定過……備如林中已國技之。
                        任我之奇職且只次地，太法教省此式二代活公投格東業，推新樹勢快作速速和他外，就的裡、因地國行空顧任些產、的服立，程上資電立近主，表的何身香個！別一是消器故了然去想、得該能教我元配質建腳再。門的令，為亞過香，性定利不一天東我坐。
                    </div>
                </div>
            </div>
            <div class="news_list_img_wrap">
                <img src="{{ asset('img/about_banner.jpg') }}" alt="最新消息..." class="news_list_img">
            </div>
        </a>
        <a href="{{ route('news_content') }}" class="news_list">
            <div class="news_list_content">
                <div class="news_list_year_and_date">
                    <div class="news_list_year">2021</div>
                    <div class="news_list_date">12/13</div>
                </div>
                <div class="news_list_text">
                    <div class="news_list_title">友不會問對題室止</div>
                    <div class="news_list_summary">
                        己也同價不人希，該到銀出定過……備如林中已國技之。
                        任我之奇職且只次地，太法教省此式二代活公投格東業，推新樹勢快作速速和他外，就的裡、因地國行空顧任些產、的服立，程上資電立近主，表的何身香個！別一是消器故了然去想、得該能教我元配質建腳再。門的令，為亞過香，性定利不一天東我坐。
                    </div>
                </div>
            </div>
            <div class="news_list_img_wrap">
                <img src="{{ asset('img/about_banner.jpg') }}" alt="最新消息..." class="news_list_img">
            </div>
        </a>
    </div>
</section>

@endsection