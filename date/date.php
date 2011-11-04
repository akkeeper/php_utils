<?php

function user_date($timestamp)
{
	$mnames=array('нул€бр€','€нвар€','феврал€','марта','апрел€','ма€','июн€','июл€','августа','сент€бр€','окт€бр€','но€бр€','декабр€');
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
