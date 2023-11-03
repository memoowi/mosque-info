<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalJumat extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'imam',
        'khotib',
        'muazin',
        'judul_khotbah',
        'is_active',
    ];
    public function setIsActiveAttribute($value)
    {
        // If the 'is_active' attribute is being set to true
        if ($value) {
            // Deactivate all other records
            $this->where('id', '!=', $this->id)->update(['is_active' => 0]);
        }
        
        $this->attributes['is_active'] = $value;
    }
}
