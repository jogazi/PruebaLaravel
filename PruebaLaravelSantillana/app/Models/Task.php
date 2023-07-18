<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'idTask';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'priority','expirationDate','idUser',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }
}