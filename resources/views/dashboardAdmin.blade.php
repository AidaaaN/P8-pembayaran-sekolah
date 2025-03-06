@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h2>Dashboard</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card text-center p-3">
            <h3>54</h3>
            <p>Siswa</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-3">
            <h3>6K</h3>
            <p>Income</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-3">
            <h3>128K</h3>
            <p>Current</p>
        </div>
    </div>
</div>

<div class="card mt-4 p-3">
    <h5>Data Kosong</h5>
</div>

<script>
    // Menghilangkan alert setelah 3 detik
    setTimeout(function() {
        document.getElementById('alertSuccess')?.remove();
    }, 3000);
</script>
@endsection
