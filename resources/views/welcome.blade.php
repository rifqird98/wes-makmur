@extends('layouts.app')

@section('content')

<body class="antialiased">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($post as $item)
                    @if ($item->tampil=="tampil")
                    
                    <div class="card m-3">
                        <div class="card-header">{{ __('Post') }}</div>
                        <div class="card-body">
                                
                            <div class="row">
                                <div class="col-6">
                                    <h5>{{ $item->judul }}</h5>
                                </div>
                                
                                <div class="col-12">
                                    <p>{{ $item->isi }}</p>
                                </div>    
                            </div>
                            <a href="{{ route('detail.edit',$item->id) }}" class="btn btn-primary">Tampilkan Isi Post</a>
                        </div>
                    </div>
                    @else
                        <p>Artikel tidak ditampilkan</p>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</body>

@endsection
