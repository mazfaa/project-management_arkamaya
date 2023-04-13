<div class="modal fade edit-modal-{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card">
        <div class="card-header"><i class="bi bi-pencil-square"></i> Edit Project</div>
        <div class="card-body">
          <form action="{{ route('update', $project->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="projectName">Project Name</label>
              <input type="text" name="project_name" value="{{ old('project_name', $project->project_name) }}" class="form-control @error('project_name') is-invalid @enderror" id="projectName" placeholder="WMS">
              @error('project_name')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="clientName">Client Name</label>
              <input type="text" name="client_name" value="{{ old('client_name', $project->client_name) }}" class="form-control @error('client_name') is-invalid @enderror form-edit" id="clientName" placeholder="NEC">
              @error('client_name')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="clientAddress">Client Address</label>
              <input type="text" name="client_address" value="{{ old('client_address', $project->client_address) }}" class="form-control @error('client_address') is-invalid @enderror form-edit" id="clientAddress" placeholder="Bandung">
              @error('client_address')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="clientChoose">Select Client Name</label>
              <select name="client_opt" id="createClientOpt" class="form-control @error('client_opt') is-invalid @enderror">
                <option>-- Select Client --</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->client_name }}" @if (old('client_opt') == $client->client_name) {{ 'selected' }} @elseif ($client->client_name == $project->client_name) {{ 'selected' }} @endif>{{ $client->client_name }}</option>
                @endforeach
              </select>
              @error('client_opt')
                  <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="projectStart">Project Start</label>
              <input type="date" name="project_start" value="{{ old('project_start', $project->project_start) }}" class="form-control @error('project_start') is-invalid @enderror" id="projectStart">
              @error('project_start')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="projectEnd">Project End</label>
              <input type="date" name="project_end" value="{{ old('project_end', $project->project_end) }}" class="form-control @error('project_end') is-invalid @enderror" id="projectEnd">
              @error('project_end')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="createStatusOpt">Status</label>
              <select name="project_status" id="createStatusOpt" class="form-control @error('project_status') is-invalid @enderror">
                <option selected>-- Select Status --</option>
                <option value="Open" @if ($project->project_status == 'Open') {{ 'selected' }} @endif>Open</option>
                <option value="Doing" @if ($project->project_status == 'Doing') {{ 'selected' }} @endif>Doing</option>
                <option value="Done" @if ($project->project_status == 'Done') {{ 'selected' }} @endif>Done</option>
              </select>
              @error('project_status')
                  <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>