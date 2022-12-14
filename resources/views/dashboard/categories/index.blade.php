@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>
  <div class="table-responsive col-lg-7">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Categories</a>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col" class="text-center">Nomor</th>
          <th scope="col" class="text-center">Category Name</th>
          <th scope="col" class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($categories as $category)
          <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td class="text-center">{{ $category->name }}</td>
            <td class="text-center">
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection