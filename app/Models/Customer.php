<?php

namespace App\Models;

class Customer
{
    // Dummy data
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'name' => 'Nico', 'email' => 'nico@example.com'],
            ['id' => 2, 'name' => 'Yuda', 'email' => 'yuda@example.com'],
            ['id' => 3, 'name' => 'Meisya', 'email' => 'meisya@example.com'],
        ];
    }

    // Ambil semua customer
    public static function all()
    {
        return self::getDummyData();
    }

    // Cari customer berdasarkan ID
    public static function find($id)
    {
        foreach (self::getDummyData() as $customers) {
            if ($customers['id'] == $id) {
                return $customers;
            }
        }
        return null;
    }
}
