@extends("admin.base")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#abstracts" role="tab" aria-controls="abstracts" aria-selected="true">All Jobs</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="abstracts" role="tabpanel" aria-labelledby="abstracts">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <h4 class="card-title">Abstracts List</h4>
                                        <table class="order-listing table table-sm table-striped" id="">
                                            <thead>
                                                <tr>
                                                    <th>SL No</th>
                                                    <th>Abstract ID</th>
                                                    <th>Title</th>
                                                    <th>Theme</th>
                                                    <th>Abstract</th>
                                                    <th>Submitted On</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($abstracts as $key => $abstract)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $abstract->abstract_id }}</td>
                                                    <td>{{ $abstract->title }}</td>
                                                    <td>{{ $abstract->theme->name }}</td>
                                                    <td>{{ asset($abstract->doc_url) }}</td>
                                                    <td>{{ $abstract->created_at->format('d, M Y') }}</td>
                                                    <td>{{ $abstract->status->name }}</td>
                                                    <td></td>
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