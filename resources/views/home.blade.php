@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h4>A total of <strong>{{count($events)}}</strong> events has been pulished in the system and over <strong>500+</strong> potential people reached!</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
