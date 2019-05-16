

@extends('layouts.main')

@section('content')

    <div class="title m-b-md">
        <a href="/"> Virtuagym </a>
    </div>

    <div class="add-plans">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="label-plan">Plan title</label>
                        <input type="text" class="form-control plan_title" required placeholder="Shoulders Day">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="label-plan">Select User</label>
                        <select class="form-control" id="users_select"> 
                            @foreach ($users as $key => $user)
                                    <option value="{{$user->id}}">{{$user->firstname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <button type="button"  class="btn add-day btn-primary" ><i class="fas fa-plus-circle"></i> Add Day</button>
                </div>
            </div>
        </div>                
        <div class="add-plans"> </div>    
        <button type="button"  class="btn add-plan btn-primary" >Save</button>
        <div id="notification"></div>
    </div>

        <!-- hidden div to be appended by jQuery -->
        <div id="hidden-card" style="display: none;">
            <div id="card" >
            </br>
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title"><input type="text" class="form-control day_title" placeholder="Day title"></h5>
                        <button type="button"  class="btn add-exercise btn-primary" ><i class="fas fa-plus-circle"></i> Add exercises</button>
                        <div class="exercises"></div>
                    </div>
                </div>
            </div>           
        </div> 
        <div id="hidden-exercise" style="display: none;">
            <input type="hidden" id="count-days" value="">
            <div class="hidden-exercise">
            <p class="card-text"><input type="text" class="form-control exercise_title" placeholder="exercise title"></p>
            <p class="card-text"><input type="text" class="form-control exercise_description" placeholder="exercise description"></p>
            </div>
        </div>       

@endsection
