@extends("admin.base")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#abstracts" role="tab" aria-controls="abstracts" aria-selected="true">ASCE Proceeding</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="abstracts" role="tabpanel" aria-labelledby="abstracts">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <h4 class="card-title">Papers List (ASCE Proceeding)</h4>
                                        <table class="order-listing table table-sm table-striped" id="">
                                            <thead>
                                                <tr>
                                                    <th>SL No</th>
                                                    <th>Paper</th>
                                                    <th>Theme</th>
                                                    <th>Email</th>
                                                    <th>Turnitin</th>
                                                    <th>Submitted On</th>
                                                    <th>Mobile</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($papers as $key => $paper)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><a href="{{ asset($paper->paper) }}" target="_blank">View / Download</a></td>
                                                    <td>{{ $paper->theme?->name }}</td>
                                                    <td>{{ $paper->email }}</td>
                                                    <td><a href="{{ asset($paper->turnitin) }}" target="_blank">View / Download</a></td>
                                                    <td>{{ $paper->created_at->format('d, M Y') }}</td>
                                                    <td>{{ $paper->mobile }}</td>
                                                    <td><a href="{{ route('edit.abstract', ['id' => $paper->id, 'type' => 'asce']) }}">{{ $paper->status?->name }}</a></td>
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