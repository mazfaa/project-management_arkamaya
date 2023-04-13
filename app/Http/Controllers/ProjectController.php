<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
      $clientName = $request->client;
      $status = $request->status;
      $search = $request->search;

      $projects = Project::select([
        'tb_m_project.project_name',
        'tb_m_client.client_name',
        'tb_m_project.project_start',
        'tb_m_project.project_end',
        'tb_m_project.project_status'
      ])
      ->join('tb_m_client', 'tb_m_client.id', '=', 'tb_m_project.client_id')
      ->when($clientName, function ($query, $clientName) {
        return $query->where('tb_m_client.client_name', $clientName);
      })
      ->when($status, function ($query, $status) {
          return $query->where('tb_m_project.project_status', $status);
      })
      ->when($search, function ($query, $search) {
        return $query->where('tb_m_project.project_name', 'LIKE', '%' . $search . '%');
      });

      if (!($clientName || $status)) {
        $client = new Client();
        return response()
               ->view('index', [
                'projects' => $projects->get(),
                'clients' => $client->all()
               ])
               ->header('Cache-control', 'no cache, no store, must-revalidate');
      }

      if ($clientName && $status) {
        $projects->where('tb_m_client.client_name', $clientName)
                 ->where('tb_m_project.project_status', $status);
      }

      if ($clientName) {
        $projects->where('client_name', $clientName);
      }

      if ($status) {
        $projects->where('project_status', $status);
      }

      if ($search) {
        $projects->where('project_name', 'LIKE', '%' . $search . '%');
      }

      $data = [
        'projects' => $projects->get(),
        'clients' => Client::all()
      ];

      return view('index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
