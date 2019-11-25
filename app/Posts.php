<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table="posts";
    protected $primarykey="id";
    protected $fillable = [
      'group_id', 'title', 'details', 'status'
  ];

  public function group()
  {
      return $this->belongsTo('App\Groups');
  }
}
