@extends("admin.base")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Staff</h4>
                    <form class="forms-sample" method="post" action="{{ route('staff.save') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="name">Satff Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Staff Name" value="{{ old('name') }}">
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="email">Email ID</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email ID" value="{{ old('email') }}">
                                @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="role">Role</label>
                                <select name="role" class="form-control form-control-lg">
                                    <option value="">Select</option>
                                    <option value="admin">Administrator</option>
                                    <option value="staff">Staff</option>
                                </select>
                                @error('role')
                                <small class="text-danger">{{ $errors->first('role') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="******">
                                @error('password')
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="theme">Themes</label>
                                <select name="themes[]" id="theme" class="form-control form-control-lg js-example-basic-multiple" multiple>
                                    <option value="">Select</option>
                                    @forelse($themes as $key => $theme)
                                    <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('themes')
                                <small class="text-danger">{{ $errors->first('themes') }}</small>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2 btn-submit">Save</button>
                        <a class="btn btn-light" onclick="window.history.back();">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection