@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Transaction History</h2>

    @if ($transactions->isEmpty())
        <div class="alert alert-info">
            No transactions found.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Recipient's Email</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>{{ $transaction->recipient_email }}</td>
                        <td>${{ $transaction->amount }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
