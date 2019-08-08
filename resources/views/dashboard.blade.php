@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div>This is the dashboard, and is only accessible if you are logged in, and AFTER you have finished all the onboarding steps.</div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in and have finished all the onboarding steps!

                    <!--
                    @if (auth()->user()->onboarding()->inProgress())
                    <div>
                        @foreach (auth()->user()->onboarding()->steps as $step)
                        <span>
                            @if($step->complete())
                            <i class="fa fa-check-square-o fa-fw"></i>
                            <s>{{ $loop->iteration }}. {{ $step->title }}</s>
                            @else
                            <i class="fa fa-square-o fa-fw"></i>
                            {{ $loop->iteration }}. {{ $step->title }}
                            @endif
                        </span>

                        <a href="{{ $step->link }}" {{ $step->complete() ? 'disabled' : '' }}>
                            {{ $step->cta }}
                        </a>
                        @endforeach

                    </div>
                    @endif
-->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
