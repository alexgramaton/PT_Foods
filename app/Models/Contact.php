<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
		protected $fillable = ['name','email', 'company', 'phone', 'website_url', 'subject', 'message'];

		public $timestamps = false;
}
