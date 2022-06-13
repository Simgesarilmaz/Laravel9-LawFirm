<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profiles extends Model
{
    use HasFactory;
    public static function AllUsers(){
        $lawyers_db=DB::table('users')
            ->select('users.id AS id', 'users.name AS fullname')
            ->get();
        return $lawyers_db;
    }
}
