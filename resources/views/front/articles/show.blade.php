@extends('front.layouts.layout')

@section('content')
    <main>
        <div class="article_content wrapper_content">
            <!-- Article page -->

            <div class="article">
                <div class="article_title">
                    <h1>{{$article->title}}</h1>
                </div>
                <div class="article_image">
                    <img src="{{$article->img}}" alt=""/>
                </div>
                <div class="article_text">
                    <p>{{$article->body}}</p>
                </div>

                <!-- Tags section -->
                <div class="article_comment_title">
                    <h2>Tags:</h2>
                </div>
                <div class="article_tags">
                    @foreach($article->tags as $tag)
                        <div class="article_tag">
                            <a href="#">{{$tag->label}}</a>
                        </div>
                    @endforeach
                </div>
                <!-- End tags section -->

                <!-- State section -->
                <div class="article_state">
                    <div class="article_itame">
                        <a href="">
                            <i class="fas fa-thumbs-up"></i>
                        </a>
                        <span>: {{$article->state->likes}}</span>
                    </div>
                    <div class="article_itame">
                        <a href="">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <span>: {{$article->state->views}}</span>
                    </div>
                </div>
                <!-- End state section -->

                <div class="article_comment_title">
                    <h2>Comments:</h2>
                    <span>{{$article->comments->count()}}</span>
                </div>

                <!-- Comments section -->
                <div class="article_comments">
                    @foreach($article->comments as $comment)
                        <div class="article_comment_body">
                            <div class="article_user_profile">
                                <div class="user_name">
                                    {{$comment->subject}}
                                </div>
                            </div>

                            <div class="article_user_comment">

                                <div class="comment_text">
                                    {{$comment->body}}
                                </div>
                                <div class="comment_state">
                                    <div class="comment_data">
                                        {{$comment->created_at}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End comment section -->
            </div>

            <!-- End article page -->

            <!-- Sidebar article -->

            <div class="more_articles">
                <div class="more_articles_title">More articles on the topic</div>
                <div class="more_articles_lent">
                    @foreach($articles as $article)
                        <div class="more_article">
                            <div class="more_image">
                                <img src="{{$article->img}}" alt=""/>
                            </div>
                            <div class="more_title">{{$article->title}}</div>
                            <div class="btn_article">
                                <a href="{{route('article',['id'=>$article->id])}}" class="btn btn_more_articles">Reade</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- End Sidebar article -->
        </div>
    </main>
@endsection

