@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><h3>Edit Biodata</h3></div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('biodata.edit',$id) }}" method="post">
                        @csrf
                        
                        <h5 class="mt-3">Personal Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form-control" value="{{ $biodata->first_name }}" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="{{ $biodata->last_name }}" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Height</label>
                                <input type="text" name="height" class="form-control" value="{{ $biodata->height }}" placeholder="Height">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Weight</label>
                                <input type="text" name="weight" class="form-control"  value="{{ $biodata->weight }}" placeholder="Weight">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Date of Birth</label>
                                <input type="text" name="dob" class="form-control datepicker"  value="{{ $biodata->dob }}" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Occupation</label>
                                <input type="text" name="occupation" class="form-control" value="{{ $biodata->occupation }}" placeholder="Occupation">
                            </div>
                        </div>

                        <h5 class="mt-3">Family Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="father_name" class="form-control" value="{{ $biodata->father_name }}" placeholder="Father Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Father Occupation</label>
                                <input type="text" name="father_occupation" class="form-control" value="{{ $biodata->father_occupation }}" placeholder="Father Occupation">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" value="{{ $biodata->mother_name }}" placeholder="Mother Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mother Occupation</label>
                                <input type="text" name="mother_occupation" class="form-control" value="{{ $biodata->mother_occupation }}" placeholder="Mother Occupation">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Siblings (if have any)</label>
                                <input type="text" name="siblings" class="form-control" value="{{ $biodata->siblings }}" placeholder="Brothers & Sisters">
                            </div>
                        </div>

                        <h5 class="mt-3">Education Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Education Qualification</label>
                                <textarea class="form-control" name="education" placeholder="Write education details here...">{{ $biodata->education }}</textarea>
                            </div>
                        </div>

                        <h5 class="mt-3">Contact Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Mobile</label>
                                <input type="text" name="mob_no" class="form-control" value="{{ $biodata->mob_no }}" placeholder="Mobile No.">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Telephone</label>
                                <input type="text" name="tel_no" class="form-control" value="{{ $biodata->tel_no }}" placeholder="Telephone No.">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Email</label>
                                <input type="email" name="email_address" class="form-control" value="{{ $biodata->email_address }}" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Residential Address</label>
                                <textarea class="form-control" name="address" placeholder="Write residential address...">{{ $biodata->address }}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection