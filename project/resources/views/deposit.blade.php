<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
</head>
<body>
@extends('layouts.app')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@section('content')
    <div class="container">
        <h1 class="text-center">Setoran</h1>
        <form action="{{ route('deposit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Jumlah Setoran:</label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Proses Setoran</button>
        </form>
    </div>
@endsection
</body>
</html>