<?php

Class Mydate {

    public $ci;

    public function __construct() {
        $this->ci = & get_instance();
    }

    public function get_ci() {
        return $this->ci;
    }

    public function get_date() {
        $sql = "SELECT   current_date as db_date ";
        $row = $this->ci->db->query($sql)->row_array();
        return $row['db_date']; //2012-11-21
    }

    public function get_current_datetime_db() {
        $sql = "SELECT  to_char(current_timestamp, 'YYYY-MM-DD [HH24:MI:SS]')  AS db_date";
        $row = $this->ci->db->query($sql)->row_array();
        $x_date = $row['db_date'];
        return $x_date;   //2009-06-11 [20:40:10]
    }

}


function getColorStatusDocument($status){
    $color = "";

    if($status == 1){

        $color = "text-warning";
        
    }else if($status == 2){

        $color = "text-primary";
    }else if($status == 3){

        $color = "text-success";
    }else if($status == 0){

        $color = "text-danger";
    }

    return $color;
}

function getLabelStatusDocument($status){
    $text = "";

    if($status == 1){

        $text = "แก้ไขเอกสาร";
        
    }else if($status == 2){

        $text = "ดำเนินการ";
    }else if($status == 3){

        $text = "ผ่าน";
    }else if($status == 0){

        $text = "ไม่ผ่าน";
    }

    return $text;
}

function generateNumericOTP($n) {
      
    $generator = "1357902468";

    $result = "";
  
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
  
    // Return result
    return $result;
}

function getIconPic($type)
{
    $url = "";
    if($type == 1){

        $url = "https://cdn0.iconfinder.com/data/icons/simpline-mix/64/simpline_42-512.png";
    }else if($type ==2){

        $url = "https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/76-office-512.png";
    }else if($type ==3){

        $url = "https://cdn0.iconfinder.com/data/icons/simpline-mix/64/simpline_47-512.png";
    }
    return $url;
}


function getTypeMail($type)
{
    $label = "";
    if($type == 1 ){

        $label = "@crru.ac.th";
    }else if($type == 2){

        $label = "'@365.crru.ac.th    ( Office 365 )";
    }else if($type == 3){

        $label = "CRRU Internet";
    }

    return $label;
}



function full_month_th($m) {
    $mm = array(
        'มกราคม',
        'กุมภาพันธ์',
        'มีนาคม',
        'เมษายน',
        'พฤษภาคม',
        'มิถุนายน',
        'กรกฎาคม',
        'สิงหาคม',
        'กันยายน',
        'ตุลาคม',
        'พฤศจิกายน',
        'ธันวาคม'
        );
    return $mm[$m];
}

function full_month_th_array($m) {
    $mm = array(
        "1" => 'มกราคม',
        "2" => 'กุมภาพันธ์',
        "3" => 'มีนาคม',
        "4" => 'เมษายน',
        "5" => 'พฤษภาคม',
        "6" => 'มิถุนายน',
        "7" => 'กรกฎาคม',
        "8" => 'สิงหาคม',
        "9" => 'กันยายน',
        "10" => 'ตุลาคม',
        "11" => 'พฤศจิกายน',
        "12" => 'ธันวาคม'
        );
    return $mm[$m];
}

function full_month_th_key($m) {
    $mm = array(
        "01" => 'มกราคม',
        "02" => 'กุมภาพันธ์',
        "03" => 'มีนาคม',
        "04" => 'เมษายน',
        "05" => 'พฤษภาคม',
        "06" => 'มิถุนายน',
        "07" => 'กรกฎาคม',
        "08" => 'สิงหาคม',
        "09" => 'กันยายน',
        "10" => 'ตุลาคม',
        "11" => 'พฤศจิกายน',
        "12" => 'ธันวาคม'
        );
    return $mm[$m];
}

function short_month_th($m) {
    $mm = array(
        'ม.ค.',
        'ก.พ.',
        'มี.ค.',
        'เม.ย.',
        'พ.ค.',
        'มิ.ย.',
        'ก.ค.',
        'ส.ค.',
        'ก.ย.',
        'ต.ค.',
        'พ.ย.',
        'ธ.ค.'
        );
    return $mm[$m];
}

function short_month_th_array($m) {
    $mm = array(
        "1" => 'ม.ค.',
        "2" => 'ก.พ.',
        "3" => 'มี.ค.',
        "4" => 'เม.ย.',
        "5" => 'พ.ค.',
        "6" => 'มิ.ย.',
        "7" => 'ก.ค.',
        "8" => 'ส.ค.',
        "9" => 'ก.ย.',
        "10" => 'ต.ค.',
        "11" => 'พ.ย.',
        "12" => 'ธ.ค.'
        );
    return $mm[$m];
}

function short_month_th_key($m) {
    $mm = array(
        "01" => 'ม.ค.',
        "02" => 'ก.พ.',
        "03" => 'มี.ค.',
        "04" => 'เม.ย.',
        "05" => 'พ.ค.',
        "06" => 'มิ.ย.',
        "07" => 'ก.ค.',
        "08" => 'ส.ค.',
        "09" => 'ก.ย.',
        "10" => 'ต.ค.',
        "11" => 'พ.ย.',
        "12" => 'ธ.ค.'
        );
    return $mm[$m];
}

function full_month_en($m) {
    $mm = array(
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
        );
    return $mm[$m];
}

function full_month_en_array($m) {
    $mm = array(
        "1" => 'January',
        "2" => 'February',
        "3" => 'March',
        "4" => 'April',
        "5" => 'May',
        "6" => 'June',
        "7" => 'July',
        "8" => 'August',
        "9" => 'September',
        "10" => 'October',
        "11" => 'November',
        "12" => 'December'
        );
    return $mm[$m];
}





function full_month_en_key($m) {
    $mm = array(
        "01" => 'January',
        "02" => 'February',
        "03" => 'March',
        "04" => 'April',
        "05" => 'May',
        "06" => 'June',
        "07" => 'July',
        "08" => 'August',
        "09" => 'September',
        "10" => 'October',
        "11" => 'November',
        "12" => 'December'
        );
    return $mm[$m];
}

function short_month_en($m) {
    $mm = array(
        'Jan',
        'Febr',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec'
        );
    return $mm[$m];
}

function short_month_en_array($m) {
    $mm = array(
        "1" => 'Jan',
        "2" => 'Feb',
        "3" => 'Mar',
        "4" => 'Apr',
        "5" => 'May',
        "6" => 'Jun',
        "7" => 'Jul',
        "8" => 'Aug',
        "9" => 'Sep',
        "10" => 'Oct',
        "11" => 'Nov',
        "12" => 'Dec'
        );
    return $mm[$m];
}

function short_month_en_key($m) {
    $mm = array(
        "01" => 'Jan',
        "02" => 'Feb',
        "03" => 'Mar',
        "04" => 'Apr',
        "05" => 'May',
        "06" => 'Jun',
        "07" => 'Jul',
        "08" => 'Aug',
        "09" => 'Sep',
        "10" => 'Oct',
        "11" => 'Nov',
        "12" => 'Dec'
        );
    return $mm[$m];
}

/*
 * $date = 2012-11-05
 */

function do_full_thai_date($date) {
    $year = substr($date, 0, 4) + 543;
    $month = full_month_th_key(substr($date, 5, 2));
    $day = substr($date, 8, 2) + 0;
    return $day . " " . $month . " พ.ศ. " . $year;    // 5  มีนาคม  พ.ศ. 2552
}

/*
 * $date = 2012-11-05
 */

function do_full_thai_date_style_1($date) {
    $year = substr($date, 0, 4) + 543;
    $month = full_month_th_key(substr($date, 5, 2));
    $day = substr($date, 8, 2) + 0;
    return $day . " " . $month . " " . $year;    // 5  มีนาคม 2552
}

/*
 * $date =  23/01/2555     ต่างกับแบบที่ 1 ตรง input
 */

function do_full_thai_date_style_2($date) {
    $year = substr($date, 6, 4);
    $month = full_month_th_key(substr($date, 3, 2));
    $day = substr($date, 0, 2) + 0;
    return $day . " " . $month . " " . $year;    // 5  มีนาคม 2552
}

/*
 * $date = 2012-11-05
 */

function do_standard_date($date) {
    $year = substr($date, 0, 4) + 543;
    $month = substr($date, 5, 2);
    $day = substr($date, 8, 2) + 0;
    return $day . "/" . $month . "/" . $year;    // 19/06/2556
}

/*
 * $date = 2012-11-05
 *  return Array
 */

function do_full_thai_date_array($date) {
    $year = substr($date, 0, 4) + 543;
    $month = full_month_th_key(substr($date, 5, 2));
    $day = substr($date, 8, 2) + 0;

    return array('day' => $day,
        'month' => $month,
        'year' => $year
        );
}

function do_full_english_date($date) {
    $year = substr($date, 0, 4);
    $month = full_month_en_key(substr($date, 5, 2));
    $day = substr($date, 8, 2) + 0;

    return $month . " " . $day . " , " . $year;    // April 27 , 2009
}

/*
 * $date = 2012-11-05
 */

function do_date_name_st1($date) {
    if (strlen($date) != 10) {
        return "";
    } else {
        $year = substr($date, 0, 4) + 543;
        $yy = substr($year, 2, 2);
        $month = short_month_th_key(substr($date, 5, 2));
        $day = substr($date, 8, 2) + 0;
        return $day . " " . $month . " " . $yy;    // 5-มี.ค.-56
    }
}

function do_dayweek_thai($date) {   // 2011-01-02
    $THAI_DAYWEEK = array(
        "0" => 'อาทิตย์',
        "1" => 'จันทร์',
        "2" => 'อังคาร',
        "3" => 'พุธ',
        "4" => 'พฤหัสบดี',
        "5" => 'ศุกร์',
        "6" => 'เสาร์'
        );

    $obj = new Mydate();
    $ci = $obj->get_ci();

    $sql = "SELECT EXTRACT(DOW FROM TIMESTAMP '$date') as db_day;";
    $row = $ci->db->query($sql)->row_array();
    $x_day = $row['db_day'];


    return $THAI_DAYWEEK[$x_day];
}

function do_dayweek_sm($date) {   // 2011-01-02
    $THAI_DAYWEEK = array(
        "0" => 'อา.',
        "1" => 'จ.',
        "2" => 'อ.',
        "3" => 'พ.',
        "4" => 'พฤ.',
        "5" => 'ศ.',
        "6" => 'ส.'
        );

    $obj = new Mydate();
    $ci = $obj->get_ci();

    $sql = "SELECT EXTRACT(DOW FROM TIMESTAMP '$date') as db_day;";
    $row = $ci->db->query($sql)->row_array();
    $x_day = $row['db_day'];


    return $THAI_DAYWEEK[$x_day];
}

function do_date_name_st2($date) {
    if (strlen($date) != 10) {
        return "";
    } else {
        $year = substr($date, 0, 4) + 543;
        $yy = substr($year, 2, 2);
        $month = short_month_th_key(substr($date, 5, 2));
        $day = substr($date, 8, 2) + 0;
        return do_dayweek_sm($date) . ' ' . $day . " " . $month . " " . $yy;    // 5-มี.ค.-56
    }
}

function date_full_thai_style1() {
    $obj = new Mydate();
    $date = $obj->get_date();
    $year = substr($date, 0, 4) + 543;
    $month = full_month_th_key(substr($date, 5, 2));
    $day = substr($date, 8, 2) + 0;
    return $day . " " . $month . " " . $year;    // 5  มีนาคม 2552
}

//คำนวณอายุ
function get_age($birthday) { // birthday = 'yyyy-mm-dd'  =  '2011-05-02'
$obj = new Mydate();
$ci = $obj->get_ci();

$sql = "SELECT  age(timestamp '$birthday')  AS db_age ";
$row = $ci->db->query($sql)->row_array();
$x_data = explode(' ', $row['db_age']);

$data['years'] = 0;
$data['mons'] = 0;
$data['days'] = 0;
for ($i = 0; $i < count($x_data); $i++) {
    if ($i == 0) {
        $data['years'] = $x_data[0];
    } else if ($i == 2) {
        $data['mons'] = $x_data[2];
    } else if ($i == 4) {
        $data['days'] = $x_data[4];
    }
}
return $data;
//    return array('years' => $x_data[0],
//        'mons' => $x_data[2],
//        'days' => $x_data[4]);
}

function get_current_datetime_db() {
    $obj = new Mydate();
    return $obj->get_current_datetime_db();
}


function do_date_name_full($date) {
    if (strlen($date) != 10) {
        return "";
    } else {
        $year = substr($date, 0, 4) + 543;

        $month = full_month_th_key(substr($date, 5, 2));
        $day = substr($date, 8, 2) + 0;
        return 'วัน' . do_dayweek_thai($date) . ' ที่ ' . $day . ' ' . $month .  ' ' . $year;    // วันจันทร์ ที่ 5 มีนาคม 2556
    }
}

function do_dayweek_code($date) {   // 2011-01-02
    $DAYWEEK_CODE = array(
        "0" => 'SUN',
        "1" => 'MON',
        "2" => 'TUE',
        "3" => 'WED',
        "4" => 'THU',
        "5" => 'FRI',
        "6" => 'SAT'
    );

    $obj = new Mydate();
    $ci = $obj->get_ci();

    $sql = "SELECT EXTRACT(DOW FROM TIMESTAMP '$date') as db_day;";

    $row = $ci->db->query($sql)->row_array();
    $x_day = $row['db_day'];


    return $DAYWEEK_CODE[$x_day];
}

function set_timezone(){
    date_default_timezone_set("Asia/Bangkok");
    return date_default_timezone_get();
}

function format_datetimeshot($date){ 
	
    $dd = explode(" ",$date);
    $tt=explode(":",$dd[1]);
    
    $d=explode("-",$dd[0]);
    
    $dd=$d[2]+0;
    $mm=getMonthShot($d[1]-1);
    $yy = ($d[0]+543)-2500;
    return "$dd $mm $yy &nbsp;$tt[0]:$tt[1] น.";
}

function format_datetimelong($date){ 

    $fulldate = do_full_thai_date($date);
	
    $dd = explode(" ",$date);
    $tt=explode(":",$dd[1]);
    
    $d=explode("-",$dd[0]);
    
    $dd=$d[2]+0;
    $mm=getMonthShot($d[1]-1);
    $yy = ($d[0]+543)-2500;
    return $fulldate." $tt[0]:$tt[1] น.";
}
function format_datetime_notime($date){ 
	
    $dd = explode(" ",$date);
    $tt=explode(":",$dd[1]);
    
    $d=explode("-",$dd[0]);
    
    $dd=$d[2]+0;
    $mm=getMonthShot($d[1]-1);
    $yy = ($d[0]+543)-2500;
    return "$dd $mm $yy";
}
function getMonthShot($set){ 

    //$monthfull = array('Jan','Feb','March','April','may','June','July','Aug','Sep','Oct','Nov','Dec');
    $monthfull = array("ม.ค.", "ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    
    return $monthfull[$set];

}

function check_intime($start_time, $end_time){
    date_default_timezone_set("Asia/Bangkok");
    $start_ = new DateTime($start_time);
    $end_ = new DateTime($end_time);
    $start_ = $start_->format('Y-m-d H:i:s');
    $end_ = $end_->format('Y-m-d H:i:s');
    $now_ = date("Y-m-d H:i:s");

    if($start_ < $now_ && $now_ < $end_){
        echo '<span class="text-success font-weight-bold">(Opening)</span>';
    }else{
        if($start_ > $now_){
            echo '<span class="text-warning font-weight-bold">(Waiting)</span>';
        }else{
            echo '<span class="text-danger font-weight-bold">(Close)</span>';
        }
        
    }
}

function tis620_to_utf8($text) {
$utf8 = "";
for ($i = 0; $i < strlen($text); $i++) {
$a = substr($text, $i, 1);
$val = ord($a);

if ($val < 0x80) {
$utf8 .= $a;
} elseif ((0xA1 <= $val && $val < 0xDA) || (0xDF <= $val && $val <= 0xFB)) {
$unicode = 0x0E00+$val-0xA0; $utf8 .= chr(0xE0 | ($unicode >> 12));
$utf8 .= chr(0x80 | (($unicode >> 6) & 0x3F));
$utf8 .= chr(0x80 | ($unicode & 0x3F));
}
}
return $utf8;
}

function show_approve_combobox($id,$data){
    $approve = array("รอตรวจ", "ยกเลิก","แก้ไข","ผ่าน");
?>
    <select id="approve-<?php echo $id;?>" name="approve_combobox" class="form-control form-select col-7">
        <option value="">รอตรวจ</option>
<?php
        for($i=1;$i<=3;$i++){
            if($data==$i){
                $selected = "selected";
            }else{
                $selected = "";
            }
            ?>
            <option value="<?php echo $i;?>" <?php echo $selected;?>><?php echo $approve[$i];?></option>
            <?php
        }
        ?>
    </select>
<?php
}




function show_date_combobox($date=''){
    if(!empty($date)){
        $explode_date  =  explode("-", $date);
        $dd = $explode_date['2'];
        $mm = $explode_date['1'];
        $yy = $explode_date['0'];

    }

    if(empty($yy)){
        $yy = date('Y');
    }
    if(empty($mm)){
        $mm = date('m');
    }
    if(empty($dd)){
        $dd = date('d');
    }

    ?>
    <select id="dd" name="dd" class="date_combobox" style="width:20%;" >
        <option value="">วัน</option>
        <?php
        for($i=1;$i<=31;$i++){
            if($dd==$i){
                $selected = "selected";
            }else{
                $selected = "";
            }
            ?>
            <option value="<?php echo sprintf("%02d",$i);?>" <?php echo $selected;?>><?php echo sprintf("%02d",$i);?></option>
            <?php
        }
        ?>
    </select>
    <select id="mm" name="mm" class="date_combobox" style="width:35%;">
        <option value="">เดือน</option>
        <?php
        for($i=1;$i<=12;$i++){
            if($mm==$i){
                $selected = "selected";
            }else{
                $selected = "";
            }
            ?>
            <option value="<?php echo sprintf("%02d",$i);?>" <?php echo $selected;?>><?php echo short_month_th_key(sprintf("%02d",$i));?></option>
            <?php
        }
        ?>
    </select>
    <select id="yy" name="yy" class="date_combobox"style="width:35%;" >
        <option value="">ปี</option>
        <?php
        for($i=2600;$i>=2540;$i--){
            if($yy+543==$i){
                $selected = "selected";
            }else{
                $selected = "";
            }
            ?>
            <option value="<?php echo sprintf("%02d",$i);?>" <?php echo $selected;?>><?php echo sprintf("%02d",$i);?></option>
            <?php
        }
        ?>
    </select>
    <?php
}



function show_date_combobox2($date=''){
    if(!empty($date)){
        $explode_date  =  explode("-", $date);
        $dd = $explode_date['2'];
        $mm = $explode_date['1'];
        $yy = $explode_date['0'];

    }

    if(empty($yy)){
        $yy = date('Y');
    }
    if(empty($mm)){
        $mm = date('m');
    }
    if(empty($dd)){
        $dd = date('d');
    }

    ?>
    <select id="dd2" name="dd2" class="date_combobox" style="width:20%;" >
        <option value="">วัน</option>
        <?php
        for($i=1;$i<=31;$i++){
            if($dd==$i){
                $selected = "selected";
            }else{
                $selected = "";
            }
            ?>
            <option value="<?php echo sprintf("%02d",$i);?>" <?php echo $selected;?>><?php echo sprintf("%02d",$i);?></option>
            <?php
        }
        ?>
    </select>
    <select id="mm2" name="mm2" class="date_combobox" style="width:35%;">
        <option value="">เดือน</option>
        <?php
        for($i=1;$i<=12;$i++){
            if($mm==$i){
                $selected = "selected";
            }else{
                $selected = "";
            }
            ?>
            <option value="<?php echo sprintf("%02d",$i);?>" <?php echo $selected;?>><?php echo short_month_th_key(sprintf("%02d",$i));?></option>
            <?php
        }
        ?>
    </select>
    <select id="yy2" name="yy2" class="date_combobox"style="width:35%;" >
        <option value="">ปี</option>
        <?php
        for($i=2600;$i>=2540;$i--){
            if($yy+543==$i){
                $selected = "selected";
            }else{
                $selected = "";
            }
            ?>
            <option value="<?php echo sprintf("%02d",$i);?>" <?php echo $selected;?>><?php echo sprintf("%02d",$i);?></option>
            <?php
        }
        ?>
    </select>
    <?php
}


function getSex($sex) {
    $name = '';
   if($sex == 'F' ){
        $name = 'หญิง';
   }else if($sex == 'M' ){
        $name = 'ชาย';
   }
   return $name;
}

function getWeight($sumpweight){

    $priceweight = 0;
    if ($sumpweight <= 100){$priceweight = 50;}
        else if ($sumpweight <= 250){$priceweight = 60;}
        else if ($sumpweight <= 350){$priceweight = 70;}
        else if ($sumpweight <= 500){$priceweight = 80;}
        else if ($sumpweight <= 750){$priceweight = 90;}
        else if ($sumpweight <= 1000){$priceweight = 100;}
        else if ($sumpweight <= 1500){$priceweight = 120;}
        else if ($sumpweight <= 2000){$priceweight = 140;}    
        else if ($sumpweight <= 2500){$priceweight = 160;}
        else if ($sumpweight <= 3000){$priceweight = 180;}
        else if ($sumpweight <= 3500){$priceweight = 200;}
        else if ($sumpweight <= 4000){$priceweight = 220;}
        else if ($sumpweight <= 4500){$priceweight = 240;}
        else if ($sumpweight <= 5000){$priceweight = 270;}
        else if ($sumpweight <= 5500){$priceweight = 300;}
        else if ($sumpweight <= 6000){$priceweight = 340;}
        else if ($sumpweight <= 6500){$priceweight = 370;}
        else if ($sumpweight <= 7000){$priceweight = 390;}
        else if ($sumpweight <= 7500){$priceweight = 420;}
        else if ($sumpweight <= 8000){$priceweight = 450;}
        else if ($sumpweight <= 8500){$priceweight = 480;}
        else if ($sumpweight <= 9000){$priceweight = 510;}
        else if ($sumpweight <= 9500){$priceweight = 540;}
        else if ($sumpweight <= 10000){$priceweight = 580;}

    return $priceweight;
}


function getOrderStatus($status){
    $name_status = "";
    if($status == 0){
        $name_status= "รอการชำระเงิน";
    }else if($status == 1){
        $name_status= "แจ้งการชำระเงิน";
    }else if($status == 2){
        $name_status= "ชำระเงินแล้ว ";
    }else if($status == 3){
        $name_status= "กำลังดำเนินการจัดส่ง ";
    }else if($status == 4){
        $name_status= "ได้รับสินค้าแล้ว ";
    }else if($status == 5){
        $name_status= "ยกเลิกสินค้า ";
    }

    return $name_status;
}




//---------- END Helper ---------
