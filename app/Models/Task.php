<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'dueDate',
        'teacher_id'
    ];

    /**
     * @return Attribute
     */
    protected function dueDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::createFromFormat("Y-m-d H:i:s", $value)->format("j-M-Y H:i"),
            set: fn (string $value) => Carbon::createFromFormat("d/m/Y", $value)->format("Y-m-d H:i:s"),
        );
    }

    /**
     * @return Attribute
     */
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::createFromFormat("Y-m-d H:i:s", $value)->format("j-M-Y H:i"),
        );
    }

}
