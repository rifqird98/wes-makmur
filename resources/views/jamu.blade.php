@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Konsul Jamu') }}</div>
                <div class="card-body">
                  
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                    
                                <form action="{{ route('jamu.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Keluahan</label>
                                        <input type="text" class="form-control" name="keluhan">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tahun Lahir</label>
                                        <input type="number" class="form-control" name="umur">
                                    </div>
                                    <button class="btn btn-primary" type="submit">cek jamu</button>
                                </form>
                                <div class="col-12">

                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Jamu</th>
                                                <th scope="col">Khasiat</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">saran Pengguna</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @isset($data)
                                                <td>{{ $data['jamu'] }}</td>
                                                <td>{{ $data['khasiat']}}</td>
                                                <td>{{ $data['umur']}}</td>
                                                <td>{{ $data['saran']}}</td>
                                                @endisset
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection