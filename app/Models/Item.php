<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 
        'brand', 
        'model', 
        'department_id', 
        'supplier_id',
    ];

    /**
     * Associate department to Item
     *
     * @return void
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Associate supplier to Item
     *
     * @return void
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
