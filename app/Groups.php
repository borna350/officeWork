<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table="groups";
    protected $primarykey="id";
    protected $fillable = [
      'name', 'status'
  ];

  public function posts()
  {
      return $this->hasMany('App\Posts');
  }
}
