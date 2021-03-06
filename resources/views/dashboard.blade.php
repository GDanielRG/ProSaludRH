@extends('layouts.app')

@section('header')
    <h2 class="header white-text col s12">Assigned test applcations</h2>
@endsection

@section('content')
    <div id="contracts">
        <div class="section">
            <div class="container">
                <br>

                {{-- EVENTS SECTION --}}
                @if(count($apps) > 0)

                    <div class="row grid">
                        @foreach($apps as $app)
                            <div class="col s12 m3 l3 grid-item">
                                <a href="/testApplications/{{$app->id}}">
                                <div class="card white hoverable">
                                    <div class="card-content center ">
                                        <h5 class="primary-color-text">{{$app->test->name}}</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                @else
                    <br><br><br>
                    <h4 class="center-align grey-text">No active test applications</h4>
                @endif

            </div>
        </div>


    </div>

@endsection