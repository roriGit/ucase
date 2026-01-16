<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneCase extends Model
{
    use HasFactory;

    /**
     * Mass assignable fields
     */
    protected $fillable = [
        'phone_id',
        'case_image',
        'firstname',
        'lastname',
        'email',
        'delivery_address',
        'contact',
        'contact_made',
    ];

    /**
     * Relationship: PhoneCase belongs to a Phone
     */
    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }

    /**
     * Accessor for full name
     */
    public function getFullNameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * Get full URL for case image
     */
    public function getCaseImageUrlAttribute()
    {
        return $this->case_image ? asset($this->case_image) : null;
    }

    /**
     * Scope for contact made (yes)
     */
    public function scopeContactMade($query)
    {
        return $query->where('contact_made', true);
    }

    /**
     * Scope for contact not made (no)
     */
    public function scopeContactPending($query)
    {
        return $query->where('contact_made', false);
    }
}
