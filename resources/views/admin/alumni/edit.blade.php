@extends('admin.layouts.user')
@section('dashtitle')
@endsection

@section('contents')
    <div class="content-page">
        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Update Alumni</h4>
                        </div>
                        <a href="/alumnis/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/alumnis/update')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$alumni_id}}" >

                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input class="form-control" placeholder="name" name="name" value="{{$alumni_Data->name}}"
                                           type="text" id="name" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Father Name</label>
                                    <input class="form-control" placeholder="Father Name" name="father_name" value="{{$alumni_Data->father_name}}"
                                           type="text" id="father_name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Domsile District</label>
                                    <input class="form-control" placeholder="Domsile District" name="domsile_dirtrict" value="{{$alumni_Data->domsile_dirtrict}}"
                                           type="text" id="domsile_dirtrict">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">School Category</label>
                                    <input class="form-control" placeholder="School Category" name="school_category" value="{{$alumni_Data->school_category}}"
                                           type="text" id="school_category">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">SSESP Batch</label>
                                    <input class="form-control" placeholder="SSESP Batch" name="ssesp_batch" value="{{Carbon\Carbon::parse($alumni_Data->ssesp_batch)->format('Y')}}"
                                           type="date" id="ssesp_batch">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Class Admitted In</label>
                                        <input class="form-control" placeholder="Class Admitted In" name="class_adm_in" value="{{$alumni_Data->class_adm_in}}"
                                               type="text" id="class_adm_in">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">institution Studied</label>
                                    <input class="form-control" placeholder="institution Studied" name="institution_studied" value="{{$alumni_Data->institution_studied}}"
                                           type="text" id="institution_studied">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Passing Year</label>
                                    <input class="form-control" placeholder="Passing Year" name="passing_year" value="{{Carbon\Carbon::parse($alumni_Data->passing_year)->format('d-m-Y')}}"
                                           type="date" id="passing_year">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Contact</label>
                                    <input class="form-control" placeholder="Contact" name="contact" value="{{$alumni_Data->contact}}"
                                           type="text" id="contact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Current Status</label>
                                    <input class="form-control" placeholder="Current Status" name="current_status" value="{{$alumni_Data->current_status}}"
                                           type="text" id="current_status">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="submit_user_button">
                                    Update
                                </button>
                            </div>
                        </div>
                </form>
                <!-- </div> -->
            </div>
        </div>
        <!-- Page end  -->

    </div>
    </div>

@endsection
