<?php

function user_date($timestamp)
{
	$mnames=array('�������','������','�������','�����','������','���','����','����','�������','��������','�������','������','�������');
	if(strpos($timestamp,'.')===false) {
		$date=Date('d.m.Y',$timestamp);
		$year=substr($date,6,4);
		$month=$mnames[1*substr($date,3,2)];
		$day=1*substr($date,0,2);
	} else {
		$year=substr($timestamp,6,4);
		$month=$mnames[1*substr($timestamp,3,2)];
		$day=1*substr($timestamp,0,2);
	}
	return $day." ".$month." ".$year;
}
