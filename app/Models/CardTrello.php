<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardTrello extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_trellos_id',
        'title',
        'sort',
    ];

    public function group_trello()
    {
        return $this->belongsTo(GroupTrello::class);
    }

}
