<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter(Builder $queries, array $filters)
    {
        $queries->when($filters['query'] ?? false, fn($queries, $query) => $queries
            ->where('title', 'like', '%' . $query . '%')
            ->orWhere('body', 'like', '%' . $query . '%')
        );
        $queries->when($filters['category'] ?? false, fn($queries, $category) => $queries
            ->where('title', 'like', '%' . $query . '%')
            ->orWhere('body', 'like', '%' . $query . '%')
        );

    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
