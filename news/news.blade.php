@extends('themes.master')
@section('content')
<?php $new_temp = DB::table('articles')->paginate(2);
$new_temp1 = DB::table('articles')->where('ishot','yes')->take(5)->get();
 ?> 
<div class="container">
     <div class="main-content-news-event">
                <div class="row">
                    <div class="col-md-9">
                        <div class="wrapper-sidebar-left-content">
                          @foreach($new_temp as $item)
                            <div class="wrapper-sidebar-left-content-block">                                                                 
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="left-sidebar-news-event">
                                            <a href="{{ url('tin-tuc/tin-tuc-chi-tiet',[$item->id,$item->alias])}}"><img class="img-responsive" src="{{ asset('public/image_upload/articles/'.$item->image) }}" alt="no image" /></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="content-news-event">
                                            <h3><a href="{{ url('tin-tuc/tin-tuc-chi-tiet',[$item->id,$item->alias])}}" class="two-line">{{ $item->title }}</a></h3>
                                            <p><i class="fa fa-clock-o"></i>{{ $item->datetime }}</p>
                                            <p class="fourth-line">{{ $item->description }} </p>
                                            <span><a href="{{ url('tin-tuc/tin-tuc-chi-tiet',[$item->id,$item->alias])}}">Chi tiết<i class="fa fa-clock-o"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                            <div class="clearfix"></div>
                            @if($new_temp->hasPages())
                            <div class="pagination-wrapper">
                            <div class="pagination-wrapper-inner">
                            {!!  $new_temp->render() !!}
                            </div>
                            </div>
                            @endif
                        </div><!--end wrapper-sidebar-left-content-->
                    </div>
                    <div class="col-md-3">
                        <div class="right-sidebar-news-event">
                            <h3>tin nổi bât</h3>
                            <ul>
                                @foreach($new_temp1 as $item)
                                <li><a href="{{ url('tin-tuc/tin-tuc-chi-tiet',[$item->id,$item->alias])}}">{{ $item->title }}</a></li>  
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
</div>
@stop