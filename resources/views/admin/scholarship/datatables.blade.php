<div class="container">
    <div class="data-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>S.NO</th>
                <th>Introduction</th>
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
                    <td>{{$row->introduction}}</td>
                        <td>
                            <a href="/scholarships/edit/{{$row->id }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                            <a href="/scholarships/delete/{{$row->id }}"><i class="fa fa-trash" aria-hidden="true"></i> </a>
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
