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
      if ((!isset($request->client) && !isset($request->status)) && ($request->client == '' && $request->status == '')) {
        $client = new Client();
        return response()
              ->view('index', [
                'projects' => $client->projects()->get(),
                'clients' => $client->all()
                ])
              ->header('Cache-control', 'no cache, no store, must-revalidate');
      } else if ($request->client) {
        $clientName = $request->client;

        $projects = Project::select(
          'tb_m_project.project_name', 'tb_m_client.client_name', 
          'tb_m_project.project_start', 'tb_m_project.project_end', 
          'tb_m_project.project_status'
          )
          ->join('tb_m_client', 'tb_m_client.id', '=', 'tb_m_project.client_id')
          ->when($clientName, function ($query, $clientName) {
            return $query->where('client_name', $clientName);
          })->get();

        return view('index', [
          'projects' => $projects,
          'clients' => Client::all()
        ]);
      } else if (isset($request->status) && $request->status != '') {
        $status = $request->status;

        $projects = Project::select(
          'tb_m_project.project_name', 'tb_m_client.client_name',
          'tb_m_project.project_start', 'tb_m_project.project_end',
          'tb_m_project.project_status'
          )
          ->join('tb_m_client', 'tb_m_client.id', '=', 'tb_m_project.client_id')
          ->when($status, function ($query, $status) {
            return $query->where('tb_m_project.project_status', $status);
          })->get();

          return view('index', [
            'projects' => $projects,
            'clients' => Client::all()
          ]);
      }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
