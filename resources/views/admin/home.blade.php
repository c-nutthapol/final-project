@extends('layouts.admin.app')

@section('title', 'Home')

@section('content')
    <div class="plyr__video-embed" id="player">
        <iframe width="500" src="https://www.youtube.com/watch?v=EPkqOJxYy7Q" allowtransparency allow="autoplay"></iframe>
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

        setInterval(() => {
            console.log(player.currentTime);
        }, 1000);
    </script>
@endsection
