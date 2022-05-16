<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CollectionParent extends Pivot
{
    use HasFactory;

    /*

    Attributes

    */

    public $timestamps = false;

    // Assumes it's `collection_parent`?
    // public $table = 'collection_parents';
}
