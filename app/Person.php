<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('age', function(Builder $builder) {
            $builder->where('age', '>', 20);
        });
    }
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeNameEqual($query, $name)
    {
        return $query->where('name', $name);
    }

    public function scopeAgeGreaterThan($query, $min)
    {
        return $query->where('age', '>=', $min);
    }

    public function scopeAgeLessThan($query, $max)
    {
        return $query->where('age', '<=', $max);
    }
}
