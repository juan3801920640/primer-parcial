@extends("layouts.base")
@section("title", "Create Event App")
@section("content") 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Create a new Event</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('events.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('events.store')}}">
            @csrf
            <div class="col-md-6 mt-2">
                <label for="name" class="form-label">Name event</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="start_date" class="form-label" >Start date</label>
                <input type="datetime-local" class="form-control" id="start_date" name="start_date" placeholder="Start date" value="{{old('start_date')}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="end_date" class="form-label" >End date</label>
                <input type="datetime-local" class="form-control" id="end_date" name="end_date" placeholder="End date" value="{{old('end_date')}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="location" class="form-label"> Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location" value="{{old('location')}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="capacity" class="form-label"> Capacity</label>
                <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Capacity" value="{{old('capacity')}}">
            </div>
            @if($errors->any())
                <div class="col-12 mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection