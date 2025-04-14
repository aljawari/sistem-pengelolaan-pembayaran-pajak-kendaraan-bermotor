<h1>Daftar Customer</h1>

<ul>
    @foreach ($customers as $customers)
        <li>
            <a href="{{ route('customers.show', $customers['id']) }}">
                {{ $customers['name'] }} - {{ $customers['email'] }}
            </a>
            |
            <a href="{{ route('customers.edit', $customers['id']) }}">Edit</a>

            <form action="{{ route('customers.destroy', $customers['id']) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
