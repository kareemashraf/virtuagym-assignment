


@extends('layouts.main')

@section('content')

<div class="title m-b-md">
    <a href="/"> Virtuagym </a>
</div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card user-card" style="">
                        <div class="card-body">
                            <h4 class="card-title"> 
                            <input type="hidden" class="form-control day_id"  value="{{ $data['day_id'] }}">
                            <input type="text" class="form-control day_title"  value="{{ $data['day_title'] }}">
                            <hr>
                            @foreach ($data['exercise'] as $key => $exercise)

                            <input type="hidden" class="form-control exercise_id"  value="{{ $exercise['exercise_id'] }}">
                            <input type="text" class="form-control exercise_title"  value="{{ $exercise['exercise_title'] }}">
                            <input type="text" class="form-control exercise_description"  value="{{ $exercise['exercise_description'] }}">
                            
                            <hr>
                            @endforeach
                            </h4>
                        </div>
                        <button type="button" class="btn update-day btn-primary" >Update</button>
                        <button type="button" class="btn delete-day btn-danger" >Delete</button>
                        <div id="notification"></div>
                    </div>
                </div>
            </div>
        </div>

@endsection
