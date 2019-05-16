
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
                         <input type="hidden" class="form-control user_id"  value="{{$users->id}}">
                         <input type="text" class="form-control firstname"  value="{{$users->firstname}}">
                         <input type="text" class="form-control lastname"  value="{{$users->lastname}}">
                         <input type="Email" class="form-control email"  value="{{$users->email}}" >
                    </h4>
                </div>
                    <button type="button" class="btn update-user btn-primary" >Update</button>
                    <button type="button" class="btn delete-user btn-danger" >Delete</button>
                    <div id="notification"></div>
            </div>
        </div>
    </div>
</div>
@endsection