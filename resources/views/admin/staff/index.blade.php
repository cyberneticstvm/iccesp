@extends("admin.base")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <div class="row mb-3">
                        <div class="col">
                            <h4 class="card-title">Staff List</h4>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('staff.create') }}" class="btn btn-primary btn-md">Create New</a>
                        </div>
                    </div>
                    <table class="order-listing table table-sm table-striped" id="">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Staff Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Themes</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $key => $staff)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $staff->name }}</td>
                                <td>{{ $staff->email }}</td>
                                <td>{{ $staff->role }}</td>
                                <td>{{ $themes->whereIn('id', $staff->themes->pluck('theme_id'))->pluck('name')->implode(', ') }}</td>
                                <td class="text-center"><a href="{{ route('staff.edit', encrypt($staff->id)) }}"><i class="mdi mdi-pencil text-warning"></i></a></td>
                                <td class="text-center"><a href="{{ route('staff.delete', encrypt($staff->id)) }}" class="dlt"><i class="mdi mdi-archive text-danger"></i></a></td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection