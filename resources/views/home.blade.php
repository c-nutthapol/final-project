@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="plyr__video-embed" id="player">
        <iframe width="500"
            src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
            allowfullscreen allowtransparency allow="autoplay"></iframe>
    </div>
@endsection
@section('script')
    <script>
        const player = new Plyr('#player', {

        });

        player.on('ready', (event) => {
            const instance = event.detail.plyr;
            console.log(event.detail.plyr.currentTime);
        });
    </script>
@endsection
