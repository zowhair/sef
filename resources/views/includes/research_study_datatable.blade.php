<div class="container">
    <div class="data-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>S.NO</th>
                <th>Title</th>
                <th>Date</th>
                <th>Decription</th>
                <th>Image</th>
                <th>File</th>
                @auth
                <th>action</th>
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
                    <td>{{$row->date}}</td>
                    <td>{{$row->decription}}</td>
                    <td>
                        @if($row->image != null)
                        <img src="{{$row->image}}" class="newsUpdate" alt="" width="5" height="5">
                        @endif
                        </td>
                    <td>
                        @if($row->file_url != null)
                        <i class="fas fa-file"></i>
                        @endif
                        </td>
                    @auth
                    <td>
                        <a href="/research-studies/edit/{{$row->id}}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                        <a href="/research-studies/delete/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                    </td>
                    @endauth
                </tr>
                <?php
                $count++;
                ?>
            @endforeach
            </tbody>

        </table>
        <br>
    </div>
</div>
