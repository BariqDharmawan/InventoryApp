<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['attachment'];

    public function uploadFile($request)
    {
        $upload = $request->file('attachment')->store('public/attachments');

        $attachment = new Attachment;
        $attachment->attachment = $upload;
        $attachment->save();

        return $attachment;
    }
}
