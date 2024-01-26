<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkedModel extends Model
{
    use HasFactory;

    public function getManyLink($model, $join_field, $join_table, $field)
    {
        return $model::where($join_field, $this->id)
            ->join($join_table, $field, "=", $join_table . "_id")
            ->get();
    }

    public function getDirectLink($model, $id)
    {
        return $model::find($id);
    }

}
