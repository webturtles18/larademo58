@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><h3>Biodata List</h3></div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('biodata.create') }}" class="btn btn-primary">Add Biodata</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('biodata.search') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4 col-xs-12">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Enter Name" value="{{request()->get('name')}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <label>Height</label>
                                <input type="text" name="height" placeholder="Height" value="{{request()->get('height')}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <label>Weight</label>
                                <input type="text" name="weight" placeholder="weight" value="{{request()->get('weight')}}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info">Search</button>
                                <a type="button" class="btn btn-danger" href="{{ route('home') }}">Reset</a>
                            </div>
                        </div>
                    </form>
                    <div class="mb-3 mt-3"></div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('includes.status')
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Occupation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($biodata_list))
                                    @foreach($biodata_list as $biodata)
                                        <tr>
                                            <th scope="row">{{ $biodata->id }}</th>
                                            <td>{{ $biodata->first_name.' '.$biodata->last_name }}</td>
                                            <td>{{ $biodata->dob }}</td>
                                            <td>{{ $biodata->height }}</td>
                                            <td>{{ $biodata->weight }}</td>
                                            <td>{{ $biodata->occupation }}</td>
                                            <td>
                                                <a href="{{ route('biodata.edit',$biodata->id) }}" data-toggle="tooltip" data-original-title="Edit">Edit</a> |
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-original-title="Delete" onclick="return confirmDelete('{{ route('biodata.delete',$biodata->id) }}');">Delete</a> |
                                                <a href="{{ route('biodata.pdf',$biodata->id) }}" target="_blank" data-toggle="tooltip" data-original-title="Download PDF">PDF</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr><td colspan="100%" class="text-center">No Data Found</td></tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
