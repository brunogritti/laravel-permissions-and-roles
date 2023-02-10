@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('URL testing') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('create-users')
                    <p>
                        <a href="{{ route('create-user') }}">Create User route</a>
                    </p>
                    @endcan
                    @can('create-blog-posts')
                    <p>
                        <a href="{{ route('create-post') }}">Create Post route</a>
                    </p>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
