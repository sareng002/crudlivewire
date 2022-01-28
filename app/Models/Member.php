<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable=['name','email','phonnumber','status'];
    protected $appends=['status_label'];
    public function getStatuslabelAttribute(){
        if ($this->status == 0){
            return '<span class="text-red-600">Free</span>';
        }
        return '<span class="text-emerald-600">pro</span>';
    }
}
