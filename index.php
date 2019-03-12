<?php
phpinfo();
die;
$arr = array(
      array('lecturer_id'=>'pkhFQOzTEINnalTIIAQJKGHc4v0SxrsI','id'=>'YxtjUi236tJ2abHBulX9Ayg4ZK8Hv4Hd'),
      array('lecturer_id'=>'A5I6sjCLSdP0OePlrrtKGTaVpCmoyiym','id'=>'NqkipiaG853O3iPZM2sFUQqVLcJurCRW'),
      array('lecturer_id'=>'5cXQk5zY0ErqEqJdgwYsUL5yqkg8Aspm','id'=>'Md3sNx0VZdkV4pvLEHT3UTMODaY0O6qr'),
      array('lecturer_id'=>'5cXQk5zY0ErqEqJdgwYsUL5yqkg8Aspm','id'=>'gFpr75BtsdHDP6BBITrqzvm0redSyk0u')
);

foreach ($arr as $value) {           
   //查看有没有重复项  
   if(isset($res[$value['lecturer_id']])){
    $res[$value['lecturer_id']]['id'] = (array)$res[$value['lecturer_id']]['id'];
    $res[$value['lecturer_id']]['id'][] = $value['id'];
   }else{    
      $res[$value['lecturer_id']] = $value;  
   }    
}

print_r(strtotime('2018-07-02 10:30:43') . "000");