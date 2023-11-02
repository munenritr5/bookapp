<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('ISBN10');

    public static $rules = array(
        'ISBN10' => 'required',
        'title' => 'required',
        'author' => 'required',
        'publisher' => 'required',
        'price' => 'required',
    );

    public function getData() {
        return $this->id . ': ' . $this->title;
    }
}
