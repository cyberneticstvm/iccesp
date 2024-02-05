@extends("web.base")
@section("content")
<div role="main" class="main">
    <section class="section bg-transparent position-relative border-0 m-0 p-0 mt-5">
        <div class="container custom-container-background z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col text-center">
                    <h2 class="text-color-dark font-weight-medium text-8 mb-5-5">Submit Abstract</h2>
                    <form class="" action="{{ route('register.abstract') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label class="text-danger">Principal Author Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name[]" required="" placeholder="Principal Author Name">
                                <small>(Please provide the exact name to be printed on Certificate)</small>
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label class="text-danger">Principal Author Designation</label>
                                <select class="form-control" name="designation[]" required="">
                                    <option value="">Select</option>
                                    @foreach($designations as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label class="text-danger">Principal Author Institution / Organization</label>
                                <input type="text" value="" data-msg-required="Please enter Institution name." maxlength="100" class="form-control" name="institution[]" required="" placeholder="Principal Author Institution">
                            </div>
                        </div>
                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>2nd Author Name</label>
                                <input type="text" maxlength="100" class="form-control" name="name[]" placeholder="2nd Author Name">
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>2nd Author Designation</label>
                                <select class="form-control" name="designation[]">
                                    <option value="">Select</option>
                                    @foreach($designations as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>2nd Author Institution / Organization</label>
                                <input type="text" maxlength="100" class="form-control" name="institution[]" placeholder="2nd Author Institution">
                            </div>
                        </div>

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>3rd Author Name</label>
                                <input type="text" maxlength="100" class="form-control" name="name[]" placeholder="3rd Author Name">
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>3rd Author Designation</label>
                                <select class="form-control" name="designation[]">
                                    <option value="">Select</option>
                                    @foreach($designations as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>3rd Author Institution / Organization</label>
                                <input type="text" maxlength="100" class="form-control" name="institution[]" placeholder="3rd Author Institution">
                            </div>
                        </div>

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>4th Author Name</label>
                                <input type="text" maxlength="100" class="form-control" name="name[]" placeholder="4th Author Name">
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>4th Author Designation</label>
                                <select class="form-control" name="designation[]">
                                    <option value="">Select</option>
                                    @foreach($designations as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>4th Author Institution / Organization</label>
                                <input type="text" maxlength="100" class="form-control" name="institution[]" placeholder="4th Author Institution">
                            </div>
                        </div>

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>5th Author Name</label>
                                <input type="text" maxlength="100" class="form-control" name="name[]" placeholder="5th Author Name">
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>5th Author Designation</label>
                                <select class="form-control" name="designation[]">
                                    <option value="">Select</option>
                                    @foreach($designations as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-4 mb-4 text-start">
                                <label>5th Author Institution / Organization</label>
                                <input type="text" maxlength="100" class="form-control" name="institution[]" placeholder="5th Author Institution">
                            </div>
                        </div>

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-6 mb-4 text-start">
                                <label class="text-danger">Contact Number</label>
                                <input type="text" value="{{ old('mobile') }}" data-msg-required="Please enter Contact Number." maxlength="10" class="form-control" name="mobile" required="" placeholder="Contact Number">
                                <small>(Preferably Whatsapp Number)</small>
                                @error('mobile')
                                <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6 mb-4 text-start">
                                <label class="text-danger">Email ID</label>
                                <input type="email" value="{{ old('email') }}" data-msg-required="Please enter Email." maxlength="100" class="form-control" name="email" required="" placeholder="Email ID">
                                @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-12 mb-4 text-start">
                                <label class="text-danger">Title of the Paper</label>
                                <input type="text" maxlength="250" value="{{ old('title') }}" class="form-control" name="title" placeholder="Title of the Paper" required="">
                                @error('title')
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-6 mb-4 text-start">
                                <label class="text-danger">Theme</label>
                                <select class="form-control" name="theme_id" required="">
                                    <option value="">Select</option>
                                    @foreach($themes as $key => $value)
                                    <option value="{{ $value->id }}" {{ ($value->id == old('theme_id')) ? 'selected' : '' }}>{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                @error('theme_id')
                                <small class="text-danger">{{ $errors->first('theme_id') }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6 mb-4 text-start">
                                <label class="text-danger">Abstract</label>
                                <input type="file" class="form-control" name="doc" required="">
                                @error('doc')
                                <small class="text-danger">{{ $errors->first('doc') }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col mb-0">
                                <button type="submit" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3 btn-submit">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection