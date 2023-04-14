<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;

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
        'tb_m_project.id',
        'tb_m_project.project_name',
        'tb_m_client.client_name',
        'tb_m_client.client_address',
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

      return response()
      ->view('index', $data)
      ->header('Cache-control', 'no cache, no store, must-revalidate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $attributes = $request->validate([
        'project_name' => ['required', 'string', 'min:3'],
        'client_name' => ['required_if:' . $request->client_opt . ',-- Select Client --', 'string', 'min:3', 'unique:tb_m_client'],
        'client_address' => ['required_if:' . $request->client_opt . ',-- Select Client --', 'string'],
        'client_opt' => [
          'required_if:client_name,null',
          'required_if:client_address,null'
        ],
        'project_start' => ['required', 'date'],
        'project_end' => ['required', 'date'],
        'project_status' => ['required']
      ]);

      if (isset($request->client_name) && isset($request->client_address)) {
        $client = Client::create([
          'client_name' => $attributes['client_name'],
          'client_address' => $attributes['client_address']
        ]);

        Project::create([
          'client_id' => $client->id,
          'project_name' => $attributes['project_name'],
          'project_start' => $attributes['project_start'],
          'project_end' => $attributes['project_end'],
          'project_status' => $attributes['project_status']
        ]);

        Alert::success('Success!', 'Project Created Successfully!');
        return redirect(RouteServiceProvider::HOME)
        ->header('Cache-control', 'no cache, no store, must-revalidate');
      }

      if (!isset($request->client_name) && !isset($request->client_address)) {
        $client = Client::where('client_name', $attributes['client_opt'])->first();

        Project::create([
          'client_id' => $client->id,
          'project_name' => $attributes['project_name'],
          'project_start' => $attributes['project_start'],
          'project_end' => $attributes['project_end'],
          'project_status' => $attributes['project_status']
        ]);

        Alert::success('Success!', 'Project Created Successfully!');
        return redirect(RouteServiceProvider::HOME)
        ->header('Cache-control', 'no cache, no store, must-revalidate');
      }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
      $attributes = $request->validate([
        'project_name' => ['required', 'string', 'min:3',],
        'client_opt' => ['required'],
        'project_start' => ['required', 'date'],
        'project_end' => ['required', 'date'],
        'project_status' => ['required']
      ]);

      $client = Client::where('client_name', $attributes['client_opt'])->first();

      $project->update([
        'client_id' => $client->id,
        'project_name' => $attributes['project_name'],
        'project_start' => $attributes['project_start'],
        'project_end' => $attributes['project_end'],
        'project_status' => $attributes['project_status']
      ]);

      Alert::success('Success!', 'The Project Updated Successfully!');
      return redirect(RouteServiceProvider::HOME)
      ->header('Cache-control', 'no cache, no store, must-revalidate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
      Project::whereIn('id', $request->ids)->delete();
      Alert::success('Success!', 'The Project Deleted Successfully!');
      return redirect(RouteServiceProvider::HOME)
      ->header('Cache-control', 'no cache, no store, must-revalidate');
    }
}
