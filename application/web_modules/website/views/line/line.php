<?php


ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

date_default_timezone_set("Asia/Bangkok");

// เอา token จากที่เรา gen ขึ้นมา

$sToken = "L1bKLrWdGuF4wqwWjyPsc8UaXQWxMVzDTwF872Ou4bV";
$id = "27";

/*$sql = "SELECT * FROM tb_register_member";
$no_member = $this->db->query($sql)->num_rows();

$sql = "SELECT * FROM tb_register_member INNER JOIN tb_prefix_name ON tb_register_member.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member.register_member_id = '$id'";
$member = $this->db->query($sql)->row();

$content = "** NEW **";
$content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
$content .= "\nเบอร์โทร : ".$member->register_member_phone;
$content .= "\nเวลาสมัคร :".$member->register_datetime_record;
$content .= "\nลำดับที่สมัคร : ".$no_member;*/

/*$sql = "SELECT * FROM tb_register_member INNER JOIN tb_prefix_name ON tb_register_member.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member.register_member_id = '$id'";
$member = $this->db->query($sql)->row();

$content = "** UPLOAD **";
$content .= "\n-----------------------------------";
$content .= "\nเอกสาร : สำเนาหนังสือรับรองวุฒิการศึกษา (ไฟล์ PDF)";
$content .= "\nLink : ".site_url('assets/document/12-202203011028181646105298.pdf');
$content .= "\n-----------------------------------";
$content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
$content .= "\nเบอร์โทร : ".$member->register_member_phone;
$content .= "\nเวลาอัพโหลด :".$member->register_datetime_record;*/

/*$id = '4';

$sql = "SELECT * FROM tb_training_member";
$no_member = $this->db->query($sql)->num_rows();

$sql = "SELECT * FROM tb_training_member WHERE training_member_id = '$id'";
$training = $this->db->query($sql)->row();

$sql = "SELECT * FROM tb_register_member INNER JOIN tb_prefix_name ON tb_register_member.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member.register_member_idcard = '$training->training_member_idcard'";
$member = $this->db->query($sql)->row();

$sql = "SELECT * FROM tb_training_register WHERE training_register_id = '3'";
$qty = $this->db->query($sql)->row();

$content = "** TRIANING **";
$content .= "\n-----------------------------------";
$content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
$content .= "\nเบอร์โทร : ".$member->register_member_phone;
$content .= "\nเวลาสมัคร :".$training->training_member_date_register;
$content .= "\nลำดับที่สมัคร : ".$no_member.' / '.$qty->training_register_qty;*/

$sql = "SELECT * FROM tb_register_member INNER JOIN tb_prefix_name ON tb_register_member.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member.register_member_id = '$id'";
$member = $this->db->query($sql)->row();

$content = "** PAYMENT **";
$content .= "\n-----------------------------------";
$content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
$content .= "\nเบอร์โทร : ".$member->register_member_phone;
$content .= "\n-----------------------------------";
$content .= "\nธนาคาร : กรุงเทพ";
$content .= "\nสาขา : ม.ราชภัฏ";
$content .= "\nวันที่ชำระ :".date('Y-m-d');
$date = new DateTime('10:15:05');
$date = $date->format('H:i');
$content .= "\nเวลาชำระ:".$date.' น.';
$content .= "\n-----------------------------------";
$content .= "\nPayment Slip : ".site_url('assets/document/12-202203011028181646105298.pdf');

$sMessage = $content;


$chOne = curl_init(); 

curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");

curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 

curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 

curl_setopt( $chOne, CURLOPT_POST, 1); 

curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 

$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );

curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 

curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec( $chOne ); 


//Result error 

if(curl_error($chOne)) 

{ 

 echo 'error:' . curl_error($chOne);

} 

else { 

 //$result_ = json_decode($result, true); 

 //echo "status : ".$result_['status']; echo "message : ". $result_['message'];

} 

curl_close( $chOne );


?>