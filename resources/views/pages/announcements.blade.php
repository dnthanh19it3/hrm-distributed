@extends('layouts.admin')

@section('_content')
<div class="container-fluid mt-2 px-4">
  <div class="row">
    <div class="col-12">
        <h4 class="font-weight-bold">Announcements</h4>
        <hr>
    </div>
  </div>
  
  <div class="row">
    <div class="col-12 mb-3">
      <div class="bg-light text-dark card p-3 overflow-auto">
        <button class="btn btn-outline-dark mb-3 w-25 align-self-end">
          <i class="fas fa-print mr-1"></i>
          <span> Print</span>
        </button>
        <table class="table table-light table-striped table-hover table-bordered text-center">
          <thead>
            <tr>
              <th scope="col" class="table-dark">#</th>
              <th scope="col" class="table-dark">Title</th>
              <th scope="col" class="table-dark">Description</th>
              <th scope="col" class="table-dark">Attachment</th>
              <th scope="col" class="table-dark">Created By</th>
              <th scope="col" class="table-dark">For</th>
              <th scope="col" class="table-dark">Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($announcements as $announcement)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td class="w-25"><a href="#">{{ $announcement->title }}</a></td>
              <td class="w-25">{{ $announcement->description }}</td>
              <td><a href="#">{{ $announcement->attachment }}</a></td>
              <td>{{ $announcement->creator->name }}</td>
              <td>{{ $announcement->department_id ? $announcement->department->name : 'ALL' }}</td>
              <td>{{ $announcement->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $announcements->links() }}  
      </div>
    </div>
  </div>
</div>
@endsection