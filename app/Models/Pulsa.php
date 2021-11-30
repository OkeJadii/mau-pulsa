<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['provider'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['provider'] ?? false, function ($query, $provider) {
            return $query->whereHas('provider', function ($query) use ($provider) {
                $query->where('slug', $provider);
            });
        });
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
