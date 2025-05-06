<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Izinkan mass assignment untuk kolom name dan email
    public static function getAll()
    {
        return Customer::all();
    }

    // Jika kamu butuh fungsi ambil semua data, ini boleh tetap ada (meskipun Customer::all() sudah cukup)
    public static function find($id)
    {
        return Customer::where('id', $id)->first();
    }

    // ⚠️ Tidak perlu override find(). Laravel sudah punya method ini.
}
