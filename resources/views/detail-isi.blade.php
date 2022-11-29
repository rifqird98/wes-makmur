@extends('layouts.app')

@section('content')

<body class="antialiased">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    
                    <div class="card m-3">
                        <div class="card-header">{{ __('Post') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ $data->judul }}</p>
                                </div>    
                                <div class="col-12">
                                    <p>{{ $data->created_at }}</p>
                                </div>    
                                <div class="col-12">
                                    <p>{{ $data->isi }}</p>
                                </div>    
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>

@endsection
