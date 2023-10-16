<?php

namespace App\Models; // Use the correct namespace for the model

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments'; // Specify the table name if it's different from the model name in plural form.

    protected $fillable = [
        'transaction_no',
        'name',
        'date',
        'transaction',
        'status',
    ];

    // Define any relationships here if needed, for example:
    /*
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    */
}
