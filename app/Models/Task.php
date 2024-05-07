<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public $task_id;

    protected $fillable = ['tasks', 'status'];

    public function toggleComplete()
    {
        $this->status = !$this->status;
        $this->save();
    }
}
