@extends("admin.base")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#abstracts" role="tab" aria-controls="abstracts" aria-selected="true">Papers With Abstracts</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="abstracts" role="tabpanel" aria-labelledby="abstracts">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <h4 class="card-title">Papers List</h4>
                                        <table class="order-listing table table-sm table-striped" id="">
                                            <thead>
                                                <tr>
                                                    <th>SL No</th>
                                                    <th>Abstract ID</th>
                                                    <th>Title</th>
                                                    <th>Theme</th>
                                                    <th>Paper</th>
                                                    <th>Turnitin</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Submitted On</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($papers as $key => $paper)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $paper->abstracts?->abstract_id }}</td>
                                                    <td>{{ $paper->abstracts?->title }}</td>
                                                    <td>{{ $paper->abstracts?->theme->name }}</td>
                                                    <td><a href="{{ asset($paper->paper) }}" target="_blank">View / Download</a></td>
                                                    <td><a href="{{ asset($paper->turnitin) }}" target="_blank">View / Download</a></td>
                                                    <td>{{ $paper->abstracts?->authors?->first()?->name }}</td>
                                                    <td>{{ $paper->abstracts?->email }}</td>
                                                    <td>{{ $paper->mobile }}</td>
                                                    <td>{{ $paper->created_at->format('d, M Y') }}</td>
                                                    <td><a href="{{ route('edit.paper', ['id' => $paper->id, 'type' => 'paper']) }}">{{ $paper->status?->name }}</a></td>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection