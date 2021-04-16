@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hi User!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You must logged in first to access the Post Table') }}
                    <br><br>
                    {{ __('Register if you dont have an account') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
