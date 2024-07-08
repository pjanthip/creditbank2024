<table class="table table-bordered table-hover">
    <thead class="well">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Type</th>
            <th>Max Length</th>
            <th>PK (pgSQL ไม่ support)</th>
            <th>Other</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i=1;
            foreach ($fields as $field) {
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$field->name?></td>
            <td><?=$field->type?></td>
            <td><?=$field->max_length?></td>
            <td><?=$field->primary_key?></td>
            <td>.....</td>
        </tr>
        <?php
                $i++;
            }
        ?>
    </tbody>
</table>