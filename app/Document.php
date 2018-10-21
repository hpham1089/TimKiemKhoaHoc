<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'id',
        'document_name',
        'document_type',
        'document_image',
        'document_link',
        'user_id'
    ];
}
