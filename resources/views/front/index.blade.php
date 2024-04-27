@extends('front.layouts.layout')

@section('content')
    <main>
        <div class="lent_title wrapper_content">
            <h1>New articles</h1>
        </div>

        <div class="lent wrapper_content">
            @foreach($articles as $article)
                <div class="lent_post">
                    <div class="post_image">
                        <img src="{{$article->img}}" alt=""/>
                    </div>
                    <div class="post_title">
                        <a href="{{route('article',['id' => $article->id] )}}"> {{$article->title}} </a>
                    </div>
                    <div class="post_description">
                        {{$article->body}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="lent_title wrapper_content">
            <h1>Popular articles</h1>
        </div>

        <!-- Slider popular posts -->
        <div
            class="itc-slider wrapper_content"
            data-slider="itc-slider"
            data-loop="true"
            data-autoplay="true"
            data-interval="4000"
        >
            <div class="itc-slider-wrapper">
                <div class="itc-slider-items">
                    @foreach($articles as $article)
                        <div class="itc-slider-item">
                            <img src="{{$article->img}}" alt=""/>
                            <div class="itc-slider-content">
                                <div class="itc-slider-title">{{$article->title}}</div>
                                <div class="itc-slider-description">
                                    {{$article->body}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Кнопки для перехода к предыдущему и следующему слайду -->
            <button class="itc-slider-btn itc-slider-btn-prev"></button>
            <button class="itc-slider-btn itc-slider-btn-next"></button>
        </div>
        <!-- end slider popular posts -->
    </main>

@endsection
