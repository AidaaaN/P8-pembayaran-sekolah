@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h2>Pembayaran</h2>

<script>
    // Menghilangkan alert setelah 3 detik
    setTimeout(function() {
        document.getElementById('alertSuccess')?.remove();
    }, 3000);
</script>
@endsection
