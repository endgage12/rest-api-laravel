<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'founder', 'member'];

    public function memberships() {
        return $this->hasMany(Membership::class, 'group_id', 'id');
    }
}
