@extends('songs.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>{{__('msg.Song details')}}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('songs.index') }}"> {{__('msg.Back')}}</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('msg.Title')}}:</strong>
                    {{ $song->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('msg.Album')}}:</strong>
                    {{ $song->album }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('msg.Release Date')}}:</strong>
                    {{ $song->release_date }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('msg.Lyrics')}}:</strong>
                    {{ $song->lyrics }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h3>{{__('msg.Comments')}}</h3>
                <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" class="form-control" placeholder="Leave a comment"></textarea>
                    </div>
                    <input type="hidden" name="song_id" value="{{ $song->id }}">
                    <button type="submit" class="btn btn-primary">{{__('msg.Submit Comment')}}</button>
                </form>
                <hr>
                <h4>{{__('msg.Existing Comments')}}</h4>
                <ul>
                    @foreach($song->comments as $comment)
                        <li>
                            <strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
