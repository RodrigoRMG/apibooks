<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowBook extends Model
{
	protected $table='borrow_book';
    protected $fillable = [
        'user_id', 'book_id'
    ];
}
