<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    use HasFactory;

    protected $table = 'tb_m_project';

    protected $fillable = ['client_id', 'project_name', 'project_start', 'project_end', 'project_status'];

    protected $dates = ['project_start', 'project_end'];
}
