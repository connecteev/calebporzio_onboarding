@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card-header">Update Profile</div>

            <div class="card-body">

                <form method="POST" action="{{ route('updateProfile') }}">
                    @csrf

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
@endsection
