

@extends('layouts.main')

@section('content')

<div class="title m-b-md">
    <a href="/"> Virtuagym </a>
</div>

<div class="plan-cards">
    <input type="hidden" class="plan_id" value="{{ $data['plan_id'] }}">
    <div id="title">{{ $data['plan_title'] }}</div>


        @foreach ($data['days'] as $key => $day)

            <div class="card" >
                <div class="card-body">
                    <p class="card-title">{{ $day['title'] }}</p>

                    @isset($day['exercise'])
                        @foreach ($day['exercise'] as $exercise)
                            <h4 class="card-text">{{ $exercise['title'] }}</h4>
                            <h5 class="card-description"><i>{{ $exercise['description'] }}</i></h5>
                        @endforeach
                    @endisset

                    <a href="/edit-day/{{ $day['day_id'] }}" class="btn btn-primary">Edit</a>
                </div>
            </div>

        @if($key % 2 == 0)

        @endif    

        @endforeach

</div>

<div class="container">
    <div class="row"></div>
</div>

<button type="button"  class="btn add-day btn-primary" ><i class="fas fa-plus-circle"></i> Add Day</button>
<button type="button"  class="btn delete-plan btn-danger" > <i class="fas fa-trash-alt"></i> Delete Plan</button>
<!-- hidden div to be appended by jQuery -->
        <div id="hidden-card" style="display: none;">
            <div id="card" >
            </br>
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title"><input type="text" class="form-control day_title" placeholder="Day title"></h5>
                        <button type="button"  class="btn add-exercise btn-primary" ><i class="fas fa-plus-circle"></i> Add exercise</button>
                        <div class="exercises"></div>
                    </div>
                    <button type="button"  class="btn save-day btn-primary" >add</button>
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

