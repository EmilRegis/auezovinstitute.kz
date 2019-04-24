<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

use Carbon\Carbon;


class Category extends Model
{
    //Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'create_by', 'modified_by'];

    //Mutators

    public function setSlugAttribute ($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . Carbon::now()->format('dmyHi'), '-');
    }

    //Get children category

    public function children() {
        return $this ->hasMany(self::class, 'parent_id');
    }


}
