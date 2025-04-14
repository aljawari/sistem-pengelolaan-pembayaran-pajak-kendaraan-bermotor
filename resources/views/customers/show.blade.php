<h1>Detail Customer</h1>

<p><strong>Nama:</strong> {{ $customers['name'] }}</p>
<p><strong>Email:</strong> {{ $customers['email'] }}</p>

<a href="{{ route('customers.edit', $customers['id']) }}">Edit</a>
<br>
<a href="{{ route('customers.index') }}">Kembali ke daftar</a>
