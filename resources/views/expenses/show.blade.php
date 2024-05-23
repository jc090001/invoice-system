@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Expense Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $expense->description }}</h5>
                <p class="card-text">Amount: {{ $expense->amount }}</p>
                <p class="card-text">Date: {{ $expense->expense_date }}</p>
                <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('expenses.destroy', $expense) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
