<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'title' => 'required',
        'author' => 'required',
        'publisher' => 'required',
        'price' => 'required',
    );

    public function getData() {
        return $this->id . ': ' . $this->title;
    }
}
