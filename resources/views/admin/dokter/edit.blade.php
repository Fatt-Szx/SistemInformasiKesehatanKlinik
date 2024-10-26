@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Edit Role</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.dokter.index') }}">Dokter</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Dokter</li>
        </ol>
    </nav>
    <form action="{{ route('admin.dokter.update', $dokter->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $dokter->name }}" required>
        </div>

        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="specialization" name="specialization" class="form-control" id="specialization" value="{{ $dokter->specialization }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Update Dokter</button>
    </form>
</div>
@endsection
