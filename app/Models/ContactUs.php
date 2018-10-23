<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    /**
     * model's table
     *
     * @var string
     */
    public $table = 'contact_us';
    /**
     * table's columns
     * @var array
     */
    public $fillable = ['name', 'email', 'subject', 'message', 'is_solved'];

}
