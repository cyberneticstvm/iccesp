@extends("admin.base")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Paper Status</h4>
                    <form class="forms-sample" method="post" action="{{ route('update.paper') }}">
                        @csrf
                        <input type="hidden" name="paper_id" value="{{ $paper->id }}">
                        <input type="hidden" name="paper_type" value="{{ $type }}">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="status">Status</label>
                                <select name="status" class="form-control form-control-lg">
                                    @forelse($status as $key => $st)
                                    <option value="{{ $st->id }}" {{ ($st->id == $abstract->status_id) ? 'selected' : '' }}>{{ $st->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('status')
                                <small class="text-danger">{{ $errors->first('status') }}</small>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2 btn-submit">Update</button>
                        <a class="btn btn-light" onclick="window.history.back();">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection