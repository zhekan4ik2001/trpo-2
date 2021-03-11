<?php
namespace Plastinin;
use core\LogAbstract;
use core\LogInterface;
class PlastininLog extends LogAbstract implements LogInterface{

    public static function log($str){
        PlastininLog::Instance()->_log($str);
    }
    public function _log($str){
        $this->log[]=$str;
    }

    public static function write(){
        PlastininLog::$i->_write();
    }

    public function _write(){
        $log='';
		if (!is_dir("log")) {
            mkdir("log");
        }

        foreach (PlastininLog::$i->log as $value) {
            $log .= $value."\n\r";
        }
        echo $log;

        $d = new \DateTime();
        $logFileName = "log/".$d->format('d.m.Y_H.i.s.ms').".log";
        file_put_contents($logFileName, implode("\n", $this->log));
    }
}
