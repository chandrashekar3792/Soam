<?php
extract($_POST);
$form_name=$_POST('form_name');
$degree=$_POST('degree');
$semester=$_POST('semester');
$exam_MMYY=$_POST('exam_MMYY');
$branch=$_POST('branch');
$subject=$_POST('subject');
$subcode=$_POST('subcode');
$centre=$_POST('centre');
$usn_frm=$_POST('usn_frm');
$usn_to=$_POST('usn_to');
$date=$_POST('date');
$time_frm=$_POST('time_frm');
$time_to=$_POST('time_to');
$usn1=$_POST('usn1');
$bookletno1=$_POST('bookletno1');
$stu_sign1=$_POST('stu_sign1');
$add_booklet1=$_POST('add_booklet1');
$total_booklet1=$_POST('total_booklet1');

$usn2=$_POST('usn2');
$bookletno2=$_POST('bookletno2');
$stu_sign2=$_POST('stu_sign2');
$add_booklet2=$_POST('add_booklet2');
$total_booklet2=$_POST('total_booklet2');

$usn3=$_POST('usn3');
$bookletno3=$_POST('bookletno3');
$stu_sign3=$_POST('stu_sign3');
$add_booklet3=$_POST('add_booklet3');
$total_booklet3=$_POST('total_booklet3');

$usn4=$_POST('usn4');
$bookletno4=$_POST('bookletno4');
$stu_sign4=$_POST('stu_sign4');
$add_booklet4=$_POST('add_booklet4');
$total_booklet4=$_POST('total_booklet4');

$usn5=$_POST('usn5');
$bookletno5=$_POST('bookletno5');
$stu_sign5=$_POST('stu_sign5');
$add_booklet5=$_POST('add_booklet5');
$total_booklet5=$_POST('total_booklet5');

$usn6=$_POST('usn6');
$bookletno6=$_POST('bookletno6');
$stu_sign6=$_POST('stu_sign6');
$add_booklet6=$_POST('add_booklet6');
$total_booklet6=$_POST('total_booklet6');

$usn7=$_POST('usn7');
$bookletno7=$_POST('bookletno7');
$stu_sign7=$_POST('stu_sign7');
$add_booklet7=$_POST('add_booklet7');
$total_booklet7=$_POST('total_booklet7');

$usn8=$_POST('usn8');
$bookletno8=$_POST('bookletno8');
$stu_sign8=$_POST('stu_sign8');
$add_booklet8=$_POST('add_booklet8');
$total_booklet8=$_POST('total_booklet8');

$usn9=$_POST('usn9');
$bookletno9=$_POST('bookletno9');
$stu_sign9=$_POST('stu_sign9');
$add_booklet9=$_POST('add_booklet9');
$total_booklet9=$_POST('total_booklet9');


 mysql_query (insert into attendance_report values ("$form_name","$degree","$semester","$exam_MMYY", "$branch", "$subject", "$subcode", "$centre", "$usn_frm", "$usn_to", "$date", "$time_frm", "$time_to", "$usn1", "$bookletno1", "$stu_sign1", "$usn2", "$bookletno2", "$stu_sign2", "$usn3", "$bookletno3", "$stu_sign3", "$usn4", "$bookletno4", "$stu_sign4", "$usn5", "$bookletno5", "$stu_sign5", "$usn6", "$bookletno6", "$stu_sign6", "$usn7", "$bookletno7", "$stu_sign7", "$usn8", "$bookletno8", "$stu_sign8", "$usn9", "$bookletno9", "$stu_sign9");
      
      