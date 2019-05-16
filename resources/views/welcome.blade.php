
@extends('layouts.main')

@section('content')

    <div class="title m-b-md">
        <a href="/"> Virtuagym </a>
    </div>
    <div class="plans"> 
        @foreach ($plans as $key => $plan)
            <a href="/plan/{{$plan->id}}"><button type="button" class="btn btn-outline-primary">{{$plan->title}}</button></a></br>
        @endforeach
    </div>
    <div class="add-plan">
         <a href="/add_plan">
                <button type="button" class="btn add-plan btn-primary" ><i class="fas fa-plus-circle"></i> Add Plan</button>
        </a>
        <a href="/users">
            <button type="button" class="btn user-btn btn-warning" >Users</button>
        </a>
</div>  

@endsection

