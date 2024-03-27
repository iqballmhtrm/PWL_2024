@extends('layout.app')

@section('subtitle', 'kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Delete')

@section('content')
    <div class="container">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Delete Kategori</h3>
            </div>

            <div class="card-body">
                <p>Apakah Anda yakin ingin menghapus kategori ini?</p>
            </div>

            <div class="card-footer">
                <form method="POST" action="{{ route('kategori.destroy', $kategori->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ url('/kategori') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection