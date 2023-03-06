<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Jenssegers\Mongodb\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, null, 'label_ids', 'menu_ids');
    }
}
