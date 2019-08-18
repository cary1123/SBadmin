<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datatable extends Model
{
    //
    protected $table='date_table';
    protected $fillable = [
        'Name',
        'Position',
        'StartDate',
        'Salary',
        'Age',
        'Office',
    ];
}
