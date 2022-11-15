<div class="container">
    <div class="data-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>S.NO</th>
                <th>Title</th>
                <th>Date</th>
                <th>Content</th>
                <th>Image</th>
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
                    <td>{{$row->content}}</td>
                    <td>
                        @if($row->img_url != null)
                        <img src="{{$row->img_url}}" class="newsUpdate" alt="" width="5" height="5">
                        @endif
                        </td>
                    @auth
                    <td>
                        <a href="/news-update/edit/{{$row->id}}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                        <a href="/news-update/delete/{{$row->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>
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
