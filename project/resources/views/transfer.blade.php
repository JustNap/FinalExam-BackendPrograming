@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Transfer Funds</h2>

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

    <form action="{{ route('transfer.process') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="to_account">Recipient's Email</label>
            <input type="email" name="to_account" id="to_account" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" name="amount" id="amount" class="form-control form-control-sm" style="width: 100px; height: 40px;" required min="1">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Transfer</button>
    </form>
</div>
@endsection
