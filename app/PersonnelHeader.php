<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelHeader extends Model
{
    protected $table = 'personnel_header';
    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'Position',
        'ContactNo',
        'CompleteAddress',
        'Barangay',
        'City',
        'Province'

    ];

}
