<?php

namespace A14e\OxfordWordSkills\Request;

use Exception;

final class Request
{

    private static object $telegramRequest ;

    public static function getRequest()
    {
        self::$telegramRequest = json_decode(self::getInput());

        return self::$telegramRequest;
    }

    /**
     * @return false|string
     */
    private static function getInput(): false|string
    {
        return file_get_contents('php://input');
    }


}