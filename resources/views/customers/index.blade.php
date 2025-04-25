@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Daftar Customer</h1>

    <ul class="list-group mb-4">
        @foreach ($customers as $customer)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('customers.show', $customer['id']) }}" class="text-decoration-none">
                        <strong>{{ $customer['name'] }}</strong> - {{ $customer['email'] }}
                    </a>
                </div>
                <div>
                    <a href="{{ route('customers.edit', $customer['id']) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('customers.destroy', $customer['id']) }}" class="d-inline">
                        @csrf
                        
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
