@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Customer</h1>

    @if ($customer)
        <form action="{{ route('customers.index') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="name" value="{{ $customer['name'] }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $customer['email'] }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali ke daftar</a>
        </form>
    @else
        <div class="alert alert-danger">
            Data customer tidak ditemukan.
        </div>
    @endif
</div>
@endsection
