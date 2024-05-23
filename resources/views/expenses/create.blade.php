@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Expense</h1>
        <form action="{{ route('expenses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="expense_date">Date</label>
                <input type="date" name="expense_date" id="expense_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add Expense</button>
        </form>
    </div>
@endsection
