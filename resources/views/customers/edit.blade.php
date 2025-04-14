<h1>Edit Customer</h1>

<form action="{{ route('customers.update', $customers['id']) }}" method="POST">
    @csrf
    <label for="name">Nama:</label>
    <input type="text" name="name" value="{{ $customers['name'] }}" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $customers['email'] }}" required><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('customers.index') }}">Kembali ke daftar</a>
