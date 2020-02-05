<?php
namespace Phpdots\Mlsmaster;

use Illuminate\Support\ServiceProvider;

use Illuminate\Database\Eloquent\Model;
/**
* Model of the table tasks.
*/
class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'name',
    ];
}