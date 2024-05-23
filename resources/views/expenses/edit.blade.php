@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Expense</h1>
        <form action="{{ route('expenses.update', $expense) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $expense->description }}" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" value="{{ $expense->amount }}" required>
            </div>
            <div class="form-group">
                <label for="expense_date">Date</label>
                <input type="date" name="expense_date" id="expense_date" class="form-control" value="{{ $expense->expense_date }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update Expense</button>
        </form>
    </div>
@endsection
