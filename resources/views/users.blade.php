

@extends('layouts.main')

@section('content')
<div class="title m-b-md">
    <a href="/"> Virtuagym </a>
</div>
<div id="users_list">
  @foreach ($users as $key => $user)
            <a href="/edit-user/{{$user->id}}"><bustton class="users_btn btn btn-warning" value="{{$user->id}}">{{$user->firstname}}</bustton></a><br>
  @endforeach
</div>
<button type="button" class="btn btn_add_user btn-primary" ><i class="fas fa-plus-circle"></i> Add Users</button>
<div id="hidden-new-user" style="display: none;">
        <div class="card user-card" style="">
          <div class="card-body">
            <h4 class="card-title"> 
                <input type="text" class="form-control firstname"  placeholder="firstname">
                <input type="text" class="form-control lastname"  placeholder="lastname">
                <input type="Email" class="form-control email"  placeholder="Email" value=""></h4>
          </div>
          <button type="button" class="btn save-user btn-primary" >Save</button>
          <div id="notification"></div>
        </div>
    </div>

@endsection

