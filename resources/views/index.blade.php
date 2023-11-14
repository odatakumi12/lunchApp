@extends('layouts.app')

@section('content')
    <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
        <div class="hero-content text-center my-10">
            <div class="max-w-md mb-10">
                <h2>Welcome to Tech食Lunch</h2>
            </div>
        </div>
    </div>
    <div class="max-w-md mb-10 justify-center">
        <div>
            <div>
                <ul>
                    @if (isset($genres))
                    @foreach($genres as $genre)
                    <li><a href="{{ route('genre.index', ['genre_id' => $genre->genre_id])}}">{{ $genre->genre }}</a></li>
                    @endforeach
                    @endif   
                </ul>
            </div>
            <div>
                <ul>
                    @if (isset($staples))
                    @foreach($staples as $staple)
                    <li><a href="{{ route('staple.index', ['staple_id' => $staple->staple_id])}}">{{ $staple->staple }}</a></li>
                    @endforeach
                    @endif
                </ul>
            </div>
            {{-- <div>    
                <ul>
                    <li><a href="">~1,000円</a></li>
                    <li><a href="">~1,500円</a></li>
                    <li><a href="">~2,000円</a></li>
                    <li><a href="">2,001円~</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
@endsection