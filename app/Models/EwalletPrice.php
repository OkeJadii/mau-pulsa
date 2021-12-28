<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EwalletPrice extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['ewallet'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['ewallet'] ?? false, function ($query, $ewallet) {
            return $query->whereHas('ewallet', function ($query) use ($ewallet) {
                $query->where('slug', $ewallet);
            });
        });
    }

    public function ewallet()
    {
        return $this->belongsTo(Ewallet::class);
    }
}
