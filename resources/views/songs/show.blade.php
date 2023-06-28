@extends('songs.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Song</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('songs.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{ $song->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Album:</strong>
                    {{ $song->album }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Release Date:</strong>
                    {{ $song->release_date }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lyrics:</strong>
                    {{ $song->lyrics }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            </div>
        </div>
    </div>
@endsection
