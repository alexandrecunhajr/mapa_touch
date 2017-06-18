<?php

namespace BaseApp\Commons;

class DateUtils {
	const DATEFORMAT_DB = 'Y-m-d';
	const DATEFORMAT_VIEW = 'd/m/Y';
	
	const DATETIMEFORMAT_DB = 'Y-m-d h:i:s';
	const DATETIMEFORMAT_VIEW = 'd/m/Y h:i:s';
	
	public static function dateDbFormat($date){
		if (empty($date)) return null;
		if (is_a($date, '\DateTime')) return $date->format(self::DATEFORMAT_DB);
		return date_create_from_format(self::DATEFORMAT_VIEW, $date)->format(self::DATEFORMAT_DB);
	}
	
	public static function dateViewFormat($date){
		if (empty($date)) return null;
		if (is_a($date, '\DateTime')) return $date->format(self::DATEFORMAT_VIEW);
		return date_create_from_format(self::DATEFORMAT_DB, $date)->format(self::DATEFORMAT_VIEW);
	}
	
	public static function datetimeDbFormat($date){
		if (empty($date)) return null;
		if (is_a($date, '\DateTime')) return $date->format(self::DATETIMEFORMAT_DB);
		return date_create_from_format(self::DATETIMEFORMAT_VIEW, $date)->format(self::DATETIMEFORMAT_DB);
	}
	
	public static function datetimeViewFormat($date){
		if (empty($date)) return null;
		if (is_a($date, '\DateTime')) return $date->format(self::DATETIMEFORMAT_VIEW);
		return date_create_from_format(self::DATETIMEFORMAT_DB, $date)->format(self::DATETIMEFORMAT_VIEW);
	}
}
