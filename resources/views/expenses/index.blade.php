@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Expenses</h1>
        <a href="{{ route('expenses.create') }}" class="btn btn-primary">Add Expense</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expenses as $expense)
                    <tr>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->expense_date }}</td>
                        <td>
                            <a href="{{ route('expenses.show', $expense) }}" class="btn btn-info">View</a>
                            <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('expenses.destroy', $expense) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
