@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><h3>Add New Biodata</h3></div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('includes.status')

                    <form action="{{ route('biodata.create') }}" method="post">
                        @csrf
                        
                        <h5 class="mt-3">Personal Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name<span class="text-danger">*</span></label>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Height<span class="text-danger">*</span></label>
                                <input type="text" name="height" class="form-control" placeholder="Height">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Weight<span class="text-danger">*</span></label>
                                <input type="text" name="weight" class="form-control" placeholder="Weight">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Date of Birth<span class="text-danger">*</span></label>
                                <input type="text" name="dob" class="form-control datepicker" placeholder="Date of Birth" readonly="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Occupation<span class="text-danger">*</span></label>
                                <input type="text" name="occupation" class="form-control" placeholder="Occupation">
                            </div>
                        </div>

                        <h5 class="mt-3">Family Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Father Name<span class="text-danger">*</span></label>
                                <input type="text" name="father_name" class="form-control" placeholder="Father Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Father Occupation</label>
                                <input type="text" name="father_occupation" class="form-control" placeholder="Father Occupation">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Mother Name<span class="text-danger">*</span></label>
                                <input type="text" name="mother_name" class="form-control" placeholder="Mother Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mother Occupation</label>
                                <input type="text" name="mother_occupation" class="form-control" placeholder="Mother Occupation">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Siblings (if have any)</label>
                                <input type="text" name="siblings" class="form-control" placeholder="Brothers & Sisters">
                            </div>
                        </div>

                        <h5 class="mt-3">Education Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Education Qualification<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="education" placeholder="Write education details here..."></textarea>
                            </div>
                        </div>

                        <h5 class="mt-3">Contact Details</h5>
                        <hr/>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Mobile<span class="text-danger">*</span></label>
                                <input type="text" name="mob_no" class="form-control" placeholder="Mobile No.">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Telephone</label>
                                <input type="text" name="tel_no" class="form-control" placeholder="Telephone No.">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Email</label>
                                <input type="email" name="email_address" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Residential Address</label>
                                <textarea class="form-control" name="address" placeholder="Write residential address..."></textarea>
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