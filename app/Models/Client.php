<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'tb_m_client';  

    public function projects() {
        return $this->join('tb_m_project', 'tb_m_client.id', '=', 'tb_m_project.client_id')
                    ->select(
                        'tb_m_project.project_name', 'tb_m_client.client_name', 
                        'tb_m_project.project_start', 'tb_m_project.project_end',
                        'tb_m_project.project_status', 
                    );
    }
}
