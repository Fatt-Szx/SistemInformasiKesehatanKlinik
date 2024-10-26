@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Create New Dokter</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.dokter.index') }}">Dokter</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Dokter</li>
        </ol>
    </nav>
    <form action="{{ route('admin.dokter.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Dokter</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
        </div>

        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="specialization" name="specialization" class="form-control" id="specialization" placeholder="Enter specialization" required>
        </div>


        <button type="submit" class="btn btn-primary">Create Dokter</button>
    </form>
</div>
@endsection
