@extends("layouts.base")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Events</h1>
        </div>
    </div>
    <form action="{{ route('events.index') }}" method="GET">
        <div class="form-group">
            <label for="column">Choose filter field:</label>
            <select name="column" id="column" class="form-control">
                <option value="name">Name</option>
                <option value="location">Location</option>
            </select>
        </div>
        <div class="form-group">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" class="form-control" placeholder="Enter your search...">
        </div>
        <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{ route('events.index') }}" class="btn btn-secondary">Clean search</a>
        </div>
    </form>
    <div class="row">
            @foreach($events as $event) 
            <div class="col-4 mb-3 mb-sm-0 mt-3">
                <div class="card" style="width: 18rem; height: 19rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$event->location}}</h6>
                        <p class="card-text-1">Start date: {{$event->start_date}}</p>
                        <p class="card-text-1">End date: {{$event->end_date}}</p>
                        <a href="{{route('events.edit',$event)}}" class="btn btn-outline-success">Edit</a>
                        <a href="#" class="card-link" >
                            <form method="post" action="{{route("events.destroy", $event)}}" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this event?')">
                                    Delete
                                </button>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        <div class="col-12 mt-3">
            <a href="{{route("events.create")}}" class="btn btn-primary">
                Create a new Event
            </a>
        </div>
    </div>
</div>
@endsection