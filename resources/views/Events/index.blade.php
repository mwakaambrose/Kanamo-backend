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
.panel-buttons {
    background-color: transparent;
    border: none;
    box-shadow: none;
}
</style>


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-buttons">
            <a class="btn btn-default" href="/events/create">New Event</a>
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

                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <li class="list-group-item">{{ $event->name }}</li>
                    @endforeach
                @else
                    <li class="list-group-item">There are no events nearby.
                        <br><a href="/events/create">Create one?</a>
                    </li>
                @endif
            </div>

        </div>
    </div>

    <div class="col-sm-9">
        <div class="panel panel-default panel-map">
            <div id="map"></div>
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
