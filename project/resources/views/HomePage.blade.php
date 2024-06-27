@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(Auth::check())
            <h5>Your bank account number: {{ Auth::user()->account_number }}</h5>
        @endif

        <!-- Konten lainnya -->
        <h1 class="text-center">Hallo {{ Auth::user()->name }}, Selamat datang di Internet Banking</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Account Overview</h5>
                        <p class="card-text">View your account balance and recent transactions.</p>
                        <a href="{{ route('check-balance-page') }}" class="btn btn-primary">Check Balance</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Deposit</h5>
                        <p class="card-text">Deposit your money here.</p>
                        <a href="{{ route('deposit') }}" class="btn btn-primary">Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Withdraw</h5>
                        <p class="card-text">Withdraw your money here.</p>
                        <a href="{{ route('withdraw') }}" class="btn btn-primary">Withdraw</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Transfer Funds</h5>
                        <p class="card-text">Transfer money between your accounts or to others.</p>
                        <a href="{{ route('transfer-funds') }}" class="btn btn-primary">Transfer Funds</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
</body>
</html>

