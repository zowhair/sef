<div class="container">
    <div class="data-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Download/View</th>
                    @auth
                    <th>Action</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
            <?php
            $count = 1;
            ?>
            @foreach($data as $row)
                <tr>
                    <td><?php
                        echo $count;
                        ?></td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->department}}</td>
                    <td>{{$row->category}}</td>
                    <td>{{$row->date}}</td>
                    <td class="td_cont">
                        <a href="{{$row->file_url}}"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                    </td>
                    @auth
                    <td>
                        <a href="/alumnis/edit/{{$row->id}}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                        <a href="/alumnis/delete/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                    </td>
                    @endauth
                </tr>
                <?php
                $count++;
                ?>
            @endforeach
                
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        <br>
    </div>
</div>