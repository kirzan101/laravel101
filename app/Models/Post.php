<?php

namespace App\Models;

use App\Http\Resources\CommentResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',
    ];

    /**
     * get the list of comments associated to Post
     *
     * @return collections
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
