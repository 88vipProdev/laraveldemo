<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class register extends Model
{
    use HasFactory;

    public function createUser($data)
    {
        DB::insert('INSERT INTO user(username,email,password) values(?,?,?)' , $data);
    }
}
