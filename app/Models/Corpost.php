<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Corporate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Corpost extends Model
{
    use HasFactory;

    protected $table= 'corposts';

    protected $fillable= [
        'corporate_id',
        'name',
        'slug',
        'description',
        'yt_iframe',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status',
        'created_by'
    ];

    public function corporate()
    {
        return $this->belongsTo(Corporate::class, 'corporate_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by', 'id');
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class, 'corpost_id', 'id');
    }
}
