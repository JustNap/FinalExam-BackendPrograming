<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarikan</title>
</head>
<body>
@extends('layouts.app')

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