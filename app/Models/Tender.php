<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $fillable = [
        'TenderNo', 'Name', 'Description', 'Type', 'Ammount', 'AttachmentPath', 'Category', 'AttachementName', 'Status', 'ClosedDate', 'Author',
    ];
}
