<?php

namespace App;

use App\Tag;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'domain', 'keywords'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];

    /**
     * Get the user of the item
     *
     * @return \App\User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
