<div class="container">
    <div class="data-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>S.NO</th>
                <th colspan="2">image</th>
                <th>action</th>

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
                    <td colspan="2"> @if($row->url != null)
                            <img src="{{$row->url}}" class="newsUpdate" alt="" width="5" height="5">
                        @endif</td>



                        <td>
                            <a href="/galleries/edit/{{$row->id }}"><i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="/galleries/delete/{{$row->id }}"><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>

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
