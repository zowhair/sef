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
                    <td>{{$row->name}}</td>
                    <td>{{$row->father_name}}</td>
                    <td>{{$row->domsile_dirtrict}}</td>
                    <td>{{$row->school_category}}</td>
                    <td>{{Carbon\Carbon::parse($row->ssesp_batch)->format('Y')}}</td>
                    <td>{{$row->class_adm_in}}</td>
                    <td>{{$row->institution_studied}}</td>
                    <td>{{Carbon\Carbon::parse($row->passing_year)->format('d-m-Y')}}</td>
                    <td>{{$row->contact}}</td>
                    <td>{{$row->current_status}}</td>
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

        </table>
        <br>
    </div>
</div>
