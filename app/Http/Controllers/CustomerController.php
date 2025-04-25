<?php

namespace App\Http\Controllers;

use App\Models\Customer;

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
        $customers = Customer::find($id);
        return view('customers.show', compact('customers'));
    }
    public function create() {
        return view('customers.create', compact('customers'));
    }
    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('customers.edit', compact('customers'));
    }

    // Proses update customer
    public function update($id)
    {
        $customers = Customer::find($id);
        $customers['name'] = request('name'); // Update nama customer
        $customers['email'] = request('email'); // Update email customer

        return redirect()->route('customers.index'); // Redirect ke daftar customer
    }
    public function destroy($id)
    {
        // Di sini kita hapus customer dari data dummy
        $customers = Customer::all();
        $filteredCustomers = array_filter($customers, function ($customers) use ($id) {
            return $customers['id'] != $id;
        });

        return redirect()->route('customers.index'); // Redirect ke daftar customer
    }
}
