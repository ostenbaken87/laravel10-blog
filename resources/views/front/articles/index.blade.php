@extends('front.layouts.layout')

@section('content')
    <main>
        <div class="lent_title wrapper_content">
            <h1>All articles</h1>
        </div>

        <div class="lent wrapper_content">
            @foreach($articles as $article)
                <div class="lent_post">
                    <div class="post_image">
                        <img src="{{$article->img}}" alt=""/>
                    </div>
                    <div class="post_title">
                        <a href="{{route('article',['id'=>$article->id])}}"> {{$article->title}} </a>
                    </div>
                    <div class="post_description">
                        {{$article->body}}
                    </div>
                </div>
            @endforeach
        </div>

    </main>
@endsection

