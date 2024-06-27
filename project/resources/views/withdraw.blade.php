<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setoran</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Tarikan</h1>
        <form action="{{ route('withdraw.process') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Jumlah Tarikan:</label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Proses Tarikan</button>
        </form>
    </div>
@endsection
</body>
</html>