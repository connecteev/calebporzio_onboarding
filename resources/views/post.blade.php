@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card-header">Update Post Count</div>

            <div class="card-body">
                <form method="POST" action="{{ route('updatePostCount') }}">
                    @csrf

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update Post Count
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
@endsection
