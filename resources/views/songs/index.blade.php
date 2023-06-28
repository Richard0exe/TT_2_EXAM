@extends('songs.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Songs list</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('songs.create') }}"> Create New Song</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dashboard') }}"> To Dashboard</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Album</th>
            <th>Release Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($songs as $song)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $song->title }}</td>
                <td>{{ $song->album }}</td>
                <td>{{ $song->release_date }}</td>
                <td>
                    <form action="{{ route('songs.destroy', $song->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('songs.show', $song->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('songs.edit', $song->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $songs->links() !!}

@endsection
