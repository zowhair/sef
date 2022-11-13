<div class="container">
    <div class="data-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>S No</th>
                <th>Title</th>
                <th>Tender Opening Date</th>
                <th>Bid Document</th>
                <th>Bid Report</th>
                <th>Contract Report</th>
                <th>Contract</th>
                @auth
                <th>Action</th>
                @endauth
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->tender_opening_date}}</td>
                    <td><a href="{{$row->bidding_document}}">
                            <?php if($row->bidding_document != null){?><i class="fas fa-file"><?php } ?></i></a>
                    </td>
                    <td><a href="{{$row->bid_report}}">
                            <?php if($row->bid_report != null){?><i class="fas fa-file"><?php } ?></i></a>
                    </td>
                    <td><a href="{{$row->contract_report}}">
                            <?php if($row->contract_report != null){?><i class="fas fa-file"><?php } ?></i></a>
                    </td>
                    <td class="td_cont"><a href="{{$row->contract}}">
                            <?php if($row->contract != null){?><i class="fas fa-file"><?php } ?></i></a>
                    </td>
                    @auth
                    <td>
                        <a href="/tenders/edit/{{$row->id}}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                        <a href="/tenders/delete/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                    </td>
                    @endauth

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


        <br>
</div>
