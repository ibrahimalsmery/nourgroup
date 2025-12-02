<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class BaseModel extends Model
{
    public function scopeSearch($query, $search)
    {
        if (!$search) {
            return $query;
        }

        $columns = Schema::getColumnListing($this->getTable());

        return $query->where(function ($q) use ($columns, $search) {
            foreach ($columns as $column) {
                $q->orWhere($column, 'ILIKE', "%{$search}%") ;
            }
        });
    }
}
