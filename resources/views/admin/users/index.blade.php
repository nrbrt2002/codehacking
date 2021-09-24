<?php use Carbon\Carbon;  ?>
@extends('layouts.admin')
@section('content')
  <h1>Users</h1>
  <table class="table table-hover table-border">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>E-amil</th>
      <th>Role</th>
      <th>Active</th>
      <th>Created At</th>
      <th>{{ Carbon::yesterday()->diffForHumans()}}</th>
      <th>Updateed At</th>
    </tr>
    @foreach ($user as $user)
      <tr>
        <td>{{ $user->id  }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td>{{ $user->is_active ==1 ? 'Active' : 'Not Active' }}</td>
        <td>{{ $user->created_at }}</td>
        <td>{{ $user->updated_at }}</td>

      </tr>
    @endforeach
  </table>
@endsection
