<?php
header("Content-Type: application/xls");
		header("Content-Disposition: attachment; filename=export.xls");
		header("Pragma: no-cache");
		header("Expires: 0");


?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <table border=1>
        <thead style="font-weight: bold;">
            <tr>
                <th rowspan="2" style="background:#FFFF00;">ลำดับ</th>
                <th rowspan="2" style="background:#FFFF00;">ชื่อ</th>
                <th rowspan="2" style="background:#FFFF00;">เบอร์โทร</th>
                <th rowspan="2" style="background:#FFFF00;">อีเมล</th>
                <th colspan="8" style="text-align:center;background:#FFFF00;">ที่อยู่</th>
            </tr>
            <tr>
                <th style="background:#FFFF00;">เลขที่</th>
                <th style="background:#FFFF00;">หมู่</th>
                <th style="background:#FFFF00;">ซอย</th>
                <th style="background:#FFFF00;">ถนน</th>
                <th style="background:#FFFF00;">ตำบล</th>
                <th style="background:#FFFF00;">อำเภอ</th>
                <th style="background:#FFFF00;">จังหวัด</th>
                <th style="background:#FFFF00;">รหัสไปรษณีย์</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($register_member as $member) :
                $sql = "SELECT * FROM districts WHERE id = '$member->DISTRICT_ID'";
                $districts = $this->db->query($sql)->row();
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $member->prefix_name_full_th . $member->register_member_fname_th . ' ' . $member->register_member_lname_th; ?></td>
                    <td><?php echo $member->register_member_phone; ?></td>
                    <td><?php echo $member->register_member_email; ?></td>
                    <td><?php echo $member->register_member_add_no; ?></td>
                    <td><?php echo $member->register_member_add_moo; ?></td>
                    <td><?php echo $member->register_member_alley; ?></td>
                    <td><?php echo $member->register_member_road; ?></td>
                    <td><?php echo $districts->name_th; ?></td>
                    <td><?php echo $member->name_th; ?></td>
                    <td><?php echo $member->province_name; ?></td>
                    <td><?php echo $member->register_member_post; ?></td>
                </tr>
            <?php
                $i++;
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>