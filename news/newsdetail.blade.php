@extends('themes.master')
@section('content')
<?php
$news_new = DB::table('articles')->orderBy('id','DESC')->take(5)->get();
?>
<div class="container">
          <div class="row">
                    <div class="col-md-9">
                        <div class="top-main-news-event-detail">
                            <h3>{!! $article_detail->title !!}</h3>
                            <p><i class="fa fa-clock-o"></i>{!! $article_detail->datetime !!}</p>
                        </div>
                        <h4>{!! $article_detail->description !!}</h4>
                        <p>{!! $article_detail->content !!}</p>
                        </div>

                    <div class="col-md-3">
                        <div class="right-sidebar-news-event">
                            <h3>tin tức mới nhất</h3>
                            <ul>
                             @foreach($news_new as $item)
                                <li><a href="{{ url('tin-tuc/tin-tuc-chi-tiet',[$item->id,$item->alias])}}" class="two-line">{!! $item->title !!}</a></li>
                               @endforeach
                            </ul>
                        
                            <div class="ad">
                               
                            </div>
                        </div>
                    </div>
              </div>
</div>
@stop
