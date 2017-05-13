@extends('layouts.app')

@section('title', 'Create Evet')

@section('content')

    <div class="col-sm-8">

        <div class="panel">

            <div class="panel-heading">
                <h4 class="panel-header">New Event</h4>
            </div>

            <div class="panel-body">
               <form>
                    <div class="form-group" method="POST" action="/events">
                        <label for="title">Event Title</label>
                        <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            placeholder="Enter the title of your event">
                    </div>

                    <div class="form-group">
                        <label for="description">Event Description</label>
                        <textarea
                            class="form-control"
                            id="description"
                            rows="3"
                            name="description"
                            placeholder="Please provide some information about your event. e.g., Who is your target audience? Are you serving food? Etc."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
