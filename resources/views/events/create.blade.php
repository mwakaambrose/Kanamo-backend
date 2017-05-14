@extends('layouts.app')

@section('title', 'Create Evet')

@section('content')

    <div class="col-sm-9">

        <div class="panel-heading">
            Create New Event
        </div>

        <div class="panel-body">
           <form method="post" action="/events">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Event Title</label>
                    <input name="title" type="text" class="form-control" id="title" aria-describedby="titlehelp" placeholder="Enter the title of your event">
                </div>

                <div class="form-group">
                    <label for="start_time">Event start time</label>
                    <input name="start_time" type="text" class="form-control" id="start_time" placeholder="Enter the start time of your event">
                    
                    <label class="class="col-md-6" for="stop_time">Event stop time</label>
                    <input name="end_time" type="text" class="form-control class="col-md-6"" id="stop_time" placeholder="Enter the stop_time of your event">
                </div>

                <div class="form-group">
                    <label for="description">Event Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Please provide some information about your event. Who is your target audience? Are you serving food?"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Post Event</button>

            </form>
        </div>
    </div>

@endsection
