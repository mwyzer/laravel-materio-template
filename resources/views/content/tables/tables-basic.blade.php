@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
   <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Table Basic</h5>
    <div>
      <a href="#" class="btn btn-sm btn-primary me-2">
        <i class="ri-add-line me-1"></i> Add
      </a>
      <form action="#" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete all projects?')">
          <i class="ri-delete-bin-6-line me-1"></i> Delete All
        </button>
      </form>
    </div>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Project</th>
          <th>Client</th>
          <th>Users</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($projects as $project)
        <tr>
          <td>
            <i class="{{ $project['icon'] }} ri-22px {{ $project['icon_color'] }} me-4"></i>
            <span>{{ $project['name'] }}</span>
          </td>
          <td>{{ $project['client'] }}</td>
          <td>
            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
              @for ($i = 5; $i <= 7; $i++)
                <li class="avatar avatar-xs pull-up" title="User {{ $i }}" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top">
                  <img src="{{ asset("assets/img/avatars/{$i}.png") }}" alt="Avatar" class="rounded-circle" />
                </li>
              @endfor
            </ul>
          </td>
          <td>
            <span class="badge rounded-pill bg-label-{{ $project['status_color'] }} me-1">
              {{ $project['status'] }}
            </span>
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="ri-more-2-line"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="ri-pencil-line me-2"></i> Edit</a>
                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-line me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>

    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->


@endsection
