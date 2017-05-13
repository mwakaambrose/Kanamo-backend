@extends('layouts.app')

@section('title', 'Create Event')

@section('content')

    <div class="col-sm-8">

        <div class="panel">

            <div class="panel-heading">
                <h4 class="panel-header">New Event</h4>
            </div>

            <div class="panel-body">
               <form>
                   {{ csrf_field() }}
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

                   <div class="form-group">
                       <label for="city">City</label>
                       <input type="text"
                              id="city"
                              name="city"
                              class="form-control"
                              placeholder="Kampala"/>
                   </div>

                   <div class="form-group">
                       <label for="street_address">Street Address</label>
                       <input type="text" id="street_address" name="street_address" class="form-control" placeholder="e.g. 123 Tagore Crescent">
                   </div>
                   <div class="form-group">
                       <label for="country">Country</label>
                       <input type="text" id="country" name="country" class="form-control" placeholder="e.g. Uganda">
                   </div>

                   <div class="row">
                       <div class="col-xs-4">
                           <div class="form-group">
                               <label for="start_date">Start Date</label>
                               <input type="date" name="start_date" class="form-control">
                           </div>
                       </div>
                       <div class="col-xs-2">
                           <div class="form-group">
                               <label for="start_date">Start Time</label>
                               <input type="time" name="start_time" class="form-control">
                           </div>
                       </div>
                       <div class="col-xs-4">
                           <div class="form-group">
                               <label for="end_date">End Date</label>
                               <input type="date" name="end_date" class="form-control">
                           </div>
                       </div>
                       <div class="col-xs-2">
                           <div class="form-group">
                               <label for="end_time">End Time</label>
                               <input type="time" name="end_time" class="form-control">
                           </div>
                       </div>



                   </div>

                   <hr>



                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
