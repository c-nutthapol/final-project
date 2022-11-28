@extends('layouts.client.app')

@section('title', 'Home')

@section('content')
    <div class="plyr__video-embed" id="player">
        <iframe src="https://www.youtube.com/watch?v=EPkqOJxYy7Q" allowtransparency allow="autoplay"> </iframe>
    </div>
    {{-- <video id="player" playsinline controls data-poster="/path/to/poster.jpg">
        <source src="/path/to/video.mp4" type="video/mp4" />
        <source src="/path/to/video.webm" type="video/webm" />

        <!-- Captions are optional -->
        <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
    </video> --}}
@endsection
@section('script')
    <script>
        const player = new Plyr('#player', plyrDefaults);

        player.on('ready', (event) => {
            const instance = event.detail.plyr;
            console.log(event.detail.plyr.currentTime);
        });

        // setInterval(() => {
        //     console.log(player.currentTime);
        // }, 1000);
    </script>
@endsection
