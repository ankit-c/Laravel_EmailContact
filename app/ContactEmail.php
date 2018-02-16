<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ContactEmail extends Model
{
    public $fillable =
    ['fullname','email','uname','address1','address2','city','state','country','zip'];
}
