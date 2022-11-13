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
                            <h4 class="mb-3">Update Tender</h4>
                        </div>
                        <a href="/tenders/" class="btn btn-primary add-list"><i
                                class="fas fa-angle-left"> </i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4"> -->
                    <form action="{{url('/tenders/update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$tender_id}}" name="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" placeholder="title" name="title"
                                           type="text" id="title" value="{{$tender_Data->title}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">date</label>
                                    <input class="form-control" name="date" value="{{$tender_Data->tender_opening_date}}"
                                           type="date" id="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Bidding Document:</label>
                                    <input class="form-control" name="file" value="{{$tender_Data->bidding_document}}"
                                           type="file" id="file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Bidding Evaluation Report:</label>
                                    <input class="form-control" name="file2" value="{{$tender_Data->bid_report}}"
                                           type="file" id="file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Contract Evaluation Report:</label>
                                    <input class="form-control" name="file3" value="{{$tender_Data->contract_report}}"
                                           type="file" id="file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Contract:</label>
                                    <input class="form-control" name="file4" value="{{$tender_Data->contract}}"
                                           type="file" id="file">
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
