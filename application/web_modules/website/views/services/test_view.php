


<?php

    // $url = 'https://orasis.crru.ac.th/orasis_crru/mis_export/clli_student_link/get_student';
    // $myvars = 'citizen_id=' . '521463061' . '&token=' . 'CLLI@CRRU#ACCESS2022@DATALINKCHECKING!!';

    // $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    // curl_setopt($ch, CURLOPT_HEADER, 0);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $response = curl_exec($ch);

    // $data = json_decode($response);

    // if (!empty($data->studentData)) {
    //     var_dump($data->studentData);
    //     echo "<br>";

    //     echo "-------------------------------------------------------";

    //     echo "<br>";

    //     echo $data->studentData[0]->pname . $data->studentData[0]->fname . ' ' . $data->studentData[0]->lname;
    // }else{
    //     echo '111111111';
    // }

    $sql = "SELECT * FROM tb_register_member_66 WHERE register_member_idcard IN ('1860800038968',
    '1309902849275',
    '1510401217292',
    '1559900284856',
    '1149600040581',
    '1129900530974',
    '1129701268765',
    '1209700291606',
    '1579900489148',
    '1570400191192',
    '1550800063612',
    '1579900464862',
    '1549900576032',
    '1507500002622',
    '1507500002398',
    '1500701278629',
    '1510401218183',
    '1199600212101',
    '2630800026897',
    '1510401213041',
    '1560301356576',
    '1580400133303',
    '1529902117566',
    '1620500154689',
    '1659902076044',
    '1141400060751',
    '1549900597188',
    '1571000033710',
    '1520700083140',
    '1507500002193',
    '1630800038790',
    '1509970014475',
    '1770600270264',
    '1149900173659',
    '1570400227154',
    '1321000215453',
    '1507400002299',
    '1589900114179',
    '1670401275593',
    '1100501338958',
    '1559900227062',
    '1769900581077',
    '1579990000135',
    '1550600076559',
    '1502000049897',
    '1170200046389',
    '1580500012494',
    '1119700028621',
    '1710800085011',
    '1559300001829',
    '1570400255760',
    '1579900945054',
    '1659901887529',
    '2630800034806')";
    $result = $this->db->query($sql)->result;

    foreach($result as $data){
        echo ($data->register_member_id)."<br>";
    }
    
?>ddddd

`register_member_id`, `curriculum_id`, `register_member_idcard`, `card_type_id`, `prefix_name_id`, `register_member_fname_th`, `register_member_lname_th`, `register_member_fname_en`, `register_member_lname_en`, `register_member_gender`, `register_member_birthday`, `register_member_origin`, `register_member_nation`, `religion_id`, `register_member_talent`, `education_level_id`, `education_degree_id`, `education_major_id`, `register_member_graduate`, `register_member_grade`, `register_member_old_school`, `register_member_sgraduate`, `register_member_swork`, `register_member_add_no`, `register_member_add_moo`, `register_member_alley`, `register_member_road`, `PROVINCE_ID`, `AMPHUR_ID`, `DISTRICT_ID`, `register_member_post`, `register_member_tel`, `register_member_phone`, `register_member_email`, `register_member_line`, `register_datetime_record`, `register_datetime_update`, `register_status`