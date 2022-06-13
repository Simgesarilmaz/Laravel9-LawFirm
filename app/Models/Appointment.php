<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Appointment extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public static function ServicesList(){
        $lawyers_db=DB::table('services')
            ->select('services.id AS id', 'services.title AS fullname')
            ->get("");
        return $lawyers_db;
    }
    public static function LawyersList(){
        $lawyers_db=DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->select('users.id AS id', 'users.name AS fullname')
            ->where('profiles.type', '=', "Lawyer")
            ->get("");
        return $lawyers_db;
    }
}
