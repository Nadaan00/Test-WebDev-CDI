@extends('layouts.app')

@section('body')
<h3 class="mb-0 text-center">Edit Monitoring</h3>
<hr />
<div class="container" style="max-width: 800px;">
    <form action="{{ route('monitoring.update', $monitoring->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col mb-2">
                <label class="form-label">Project Name</label>
                <input type="text" name="project_name" class="form-control" placeholder="Project Name" value="{{ $monitoring->project_name }}">
            </div>
            <div class="col mb-2">
                <label class="form-label">Client</label>
                <input type="text" name="client" class="form-control" placeholder="Client" value="{{ $monitoring->client }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col mb-2">
                <label class="form-label">Name Project Leader</label>
                <input type="text" name="name_project_leader" class="form-control" placeholder="Name Project Leader" value="{{ $monitoring->name_project_leader }}">
            </div>
            <div class="col mb-2">
                <label class="form-label">Email Project Leader</label>
                <input type="text" name="email_project_leader" class="form-control" placeholder="Email Project Leader" value="{{ $monitoring->email_project_leader }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Profil</label>
                <input class="form-control" type="file" name="image">
            </div>
        </div>
        <div class="row mb-3">
            <div class="text-center w-100">
                <a href="{{ route('monitoring.index') }}" class="btn btn-danger">Cancel</a>
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection