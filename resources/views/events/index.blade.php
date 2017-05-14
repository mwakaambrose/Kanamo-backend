@extends('layouts.app')
@section('title', 'Events')

@section('content')

<style>
#map {
    border-radius: 4px;
    border: 1px solid transparent;
    height: 300px;
    width: 100%;
}
</style>


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <a class="btn btn-default" href="/events/create">New Event</a>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-sm-3">
        <div class="panel panel-default">

            <div class="panel-heading">
                Quick Events
            </div>

            <div class="list-group">
                @foreach ($events as $event)
                    @if(count($events) < 1)
                    <li class="list-group-item">There are no events nearby.</li>
                    @endif
                    <li class="list-group-item">
                        <p><strong>{{ $event->title }}</strong></p> 
                        <p>posted on {{ $event->created_at }}</p></li>
                @endforeach
            </div>

        </div>
    </div>

    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<script>
function initMap() {
    var kampala = {lat: 0.335124, lng: 32.582643 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: kampala
    });

    var marker = new google.maps.Marker({
        position: kampala,
        map: map
    });
}
</script>

@endsection
