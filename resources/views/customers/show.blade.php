@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detail Customer</h1>

    @if ($customer)
        <div class="card">
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $customer['name'] }}</p>
                <p><strong>Email:</strong> {{ $customer['email'] }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('customers.edit', $customer['id']) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali ke daftar</a>
        </div>
    @else
        <div class="alert alert-danger">
            Data customer tidak ditemukan.
        </div>
    @endif
</div>
@endsection
