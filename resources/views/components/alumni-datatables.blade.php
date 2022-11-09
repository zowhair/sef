<div class="container">
    <div class="data-table">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>Name</th>
                    <th>Father <br>Name</th>
                    <th>Domicile<br> District</th>
                    <th>School<br> Category</th>
                    <th>SSESP <br>Batch</th>
                    <th>Class<br> Admitted in</th>
                    <th>Institution <br>Studied</th>
                    <th>Passing<br> Year</th>
                    <th>Contact</th>
                    <th>Current <br>Status</th>
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
                    <td>{{$row->name}}</td>
                    <td>{{$row->father_name}}</td>
                    <td>{{$row->domcile_district}}</td>
                    <td>{{$row->school_category}}</td>
                    <td>{{$row->ssesp_batch}}</td>
                    <td>{{$row->class_admited_in}}</td>
                    <td>{{$row->institution_studied}}</td>
                    <td>{{$row->passing_year}}</td>
                    <td>{{$row->contact}}</td>
                    <td>{{$row->current_status}}</td>
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
