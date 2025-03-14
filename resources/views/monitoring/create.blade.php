@extends('layouts.app')

@section('body')
<h3 class="mb-0 text-center">Add Project Monitoring</h3>
<hr />
<div class="container" style="max-width: 800px;">
    <form action="{{ route('monitoring.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Project Name</label>
                <input type="text" name="project_name" class="form-control">
            </div>
            <div class="col">
            <label class="form-label">Client</label>
                <input type="text" name="client" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Name Project Leader</label>
                <input type="text" name="name_project_leader" class="form-control">
            </div>
            <div class="col">
            <label class="form-label">Email Project Leader</label>
                <input type="text" name="email_project_leader" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Profil</label>
                <input class="form-control" type="file" name="image">
            </div>
        </div>
        <div class="row">
            <div class="text-center w-100">
                <a href="{{ route('monitoring.index') }}" class="btn btn-danger">Cancel</a>
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection