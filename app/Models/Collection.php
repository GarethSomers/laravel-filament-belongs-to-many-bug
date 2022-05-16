<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use HasFactory, SoftDeletes;

    /*

    Attributes

    */
    public $fillable = [
        'title',
        'slug',
        'data'
    ];

    public $casts = [
        'data' => 'json'
    ];

    /*

    Relationships

    */
    public function parents (): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Collection::class, 'collection_parent', 'collection_id', 'parent_id')
            ->withPivot(["id"])
            ->using(CollectionParent::class);
    }

    public function children (): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Collection::class, 'collection_parent', 'parent_id', 'collection_id')
            ->withPivot(["id"])
            ->using(CollectionParent::class);
    }
}
