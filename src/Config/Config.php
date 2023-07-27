<?php


namespace A14e\OxfordWordSkills\Config;


use Exception;

class Config
{
    private $config;
    const FILE_PATH = __DIR__ . '/../../config/config.php';


    /**
     * @throws Exception
     */
    public function getConfig($key)
    {

        if (file_exists(self::FILE_PATH)) {

            $this->config = include self::FILE_PATH;

            return (object) $this->config[$key];
        } else
            throw new Exception('file not found!');


    }


}