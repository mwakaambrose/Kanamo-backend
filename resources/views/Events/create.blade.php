@extends('layouts.app')

@section('title', 'Create Event')

@section('content')
    <style>
        .subdued {
            color: #85d496;
            vertical-align: middle;
            margin-right:-10px;
        }
    </style>
    <div class="col-sm-8">

        <div class="panel">

            <div class="panel-heading">
                <h4 class="panel-header">New Event</h4>
            </div>

            <div class="panel-body">

               <form method="POST" action="/events">

                   {{ csrf_field() }}

                    <div class="form-group">

                        <label for="title">Event Title</label>
                        <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            required
                            placeholder="Enter the title of your event">
                    </div>

                    <div class="form-group">
                        <label for="description">Event Description</label>
                        <textarea
                            class="form-control"
                            id="description"
                            rows="3"
                            name="description"
                            required
                            placeholder="Please provide some information about your event. e.g., Who is your target audience? Are you serving food? Etc."></textarea>
                    </div>

                   <div class="form-group">
                       <label for="city">City</label>
                       <input type="text"
                              id="city"
                              name="city"
                              class="form-control"
                              required
                              placeholder="Kampala"/>
                   </div>

                   <div class="form-group">
                       <label for="street_address">Street Address</label>
                       <input type="text" id="street_address" name="street_address" class="form-control" placeholder="e.g. 123 Tagore Crescent" required>
                   </div>

                   <div class="form-group">
                       <label for="country">Country</label>
                       <input type="text" id="country" name="country" class="form-control" placeholder="e.g. Uganda" required>
                   </div>

                   <div class="row">

                       <div class="col-xs-8">
                           <div class="form-group">
                               <label for="start_date">Start Date</label>
                               <input type="date" name="start-date" class="form-control" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                           </div>
                       </div>

                       <div class="col-xs-4">
                           <div class="form-group">
                               <label for="start_time">Start Time</label>
                               <input type="time" name="start_time" class="form-control">
                           </div>
                       </div>
                   </div>

                    <div class="row">
                       <div class="col-xs-8">
                           <div class="form-group">
                               <label for="end-date">End Date</label>
                               <input type="date" name="end-date" class="form-control" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                           </div>
                       </div>

                       <div class="col-xs-4">
                           <div class="form-group">
                               <label for="end_time">End Time</label>
                               <input type="time" name="end_time" class="form-control" required>
                           </div>
                       </div>
                   </div>

                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <div class="row">
                                    <div class="col-xs-2">
                                        <strong class="subdued">UGX</strong>
                                    </div>
                                    <div class="col-xs-10">
                                        <input type="number" min="0" step="100" max="10000000" name="price" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <hr>


                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
