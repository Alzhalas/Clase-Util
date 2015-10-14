<?php

class server {

    static function getServerName() {
        return $_SERVER["SERVER_NAME"];
    }

    static function getRootPath() {
        return $_SERVER["CONTEXT_DOCUMENT_ROOT"];
    }

    static function getPort() {
        return $_SERVER["SERVER_PORT"];
    }

    static function getUserAgent() {
        return $_SERVER["HTTP_USER_AGENT"];
    }

    static function getFileName() {
        return $_SERVER["SCRIPT_FILENAME"];
    }

    static function getRequiredMethod() {
        return $_SERVER["REQUEST_METHOD"];
    }

    static function getIpClient() {
        return $_SERVER["REMOTE_ADDR"];
    }

    static function getDate($campo = null) {
        date_default_timezone_set('Europe/Madrid');
        switch ($campo) {
            case "Y": intval(date("Y", $_SERVER["REQUEST_TIME"]));
                break;
            case "M": intval(date("M", $_SERVER["REQUEST_TIME"]));
                break;
            case "D": intval(date("D", $_SERVER["REQUEST_TIME"]));
                break;
            case "h": intval(date("h", $_SERVER["REQUEST_TIME"]));
                break;
            case "m": intval(date("m", $_SERVER["REQUEST_TIME"]));
                break;
            case "s": intval(date("s", $_SERVER["REQUEST_TIME"]));
                break;
            default:
                return $SERVER["REQUEST_TIME"];
                break;
        }
        return $_SERVER["REQUEST_TIME"];
    }

    static function isGet() {
        return self::getRequiredMethod() == "GET";
    }

    static function isPost() {
        return self::getRequiredMethod() == "POST";
    }

}
