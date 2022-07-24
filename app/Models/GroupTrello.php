<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupTrello extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sort',
    ];

    public function card_trello()
    {
        return $this->hasMany(CardTrello::class)->orderBy('sort');
    }

}
