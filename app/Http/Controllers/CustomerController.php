<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Tampilkan daftar customer
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // Tampilkan detail customer
    public function show($id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return redirect()->route('customers.index')->with('error', 'Customer tidak ditemukan.');
        }

        return view('customers.show', compact('customer'));
    }

    // Form tambah customer
    public function create()
    {
        return view('customers.create');
    }

    // Simpan customer baru ke database
    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan.');
    }

    // Form edit customer
    public function edit($id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return redirect()->route('customers.index')->with('error', 'Customer tidak ditemukan.');
        }

        return view('customers.edit', compact('customer'));
    }

    // Proses update customer
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            ]);
        }

        return redirect()->route('customers.index')->with('success', 'Customer berhasil diperbarui.');
    }

    // Hapus customer
    public function destroy($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->delete();
        }

        return redirect()->route('customers.index')->with('success', 'Customer berhasil dihapus.');
    }
}
