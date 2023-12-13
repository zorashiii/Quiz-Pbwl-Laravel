@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f0f0f0;
                        color: #333;
                        margin: 0;
                        padding: 0;
                    }
            
                    .container {
                        max-width: 1300px;
                        margin: 0 auto;
                        padding: 5px;
                        text-align: center;
                    }
            
                    h1 {
                        color: blue;
                        font-size: 36px;
                        margin-bottom: 20px;
                    }
                </style>
            </head>
            <body>
            
            <div class="container">
                <h1>Selamat Datang di Halaman Home</h1>
                <p>Ini adalah halaman utama website quiz pbwl Bima Sanjaya.</p>
            </div>
            
            </body>
            </div>
        </div>
    </div>
</div>
@endsection
