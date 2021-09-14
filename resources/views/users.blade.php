<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List To Approve') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Users List to Approve</div>

                                <div class="card-body">

                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                    <table class="table">
                                        <tr>
                                            <th>User name</th>
                                            <th>Email</th>
                                            <th>Registered at</th>
                                            <th>Approval Status</th>
                                            <th></th>
                                        </tr>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    @if ($user->approved_at)
                                                        <span class="badge badge-success">Approved</span>
                                                    @else
                                                        <span class="badge badge-secondary">Not Approved</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->approved_at)
                                                        {{-- <a href="{{ route('admin.users.approve', $user->id) }}"
                                                        class="btn btn-primary btn-sm">Approve</a> --}}
                                                    @else
                                                        <a href="{{ route('admin.users.approve', $user->id) }}"
                                                        class="btn btn-primary btn-sm">Approve</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No users found.</td>
                                            </tr>
                                        @endforelse
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users List to Approve</div>

                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                                <th></th>
                            </tr>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td><a href="{{ route('admin.users.approve', $user->id) }}"
                                           class="btn btn-primary btn-sm">Approve</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No users found.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}