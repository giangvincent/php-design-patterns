<?php

class Logger
{
    private $fileName;
    private static $instance = null;

    public function __construct()
    {
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function write($message)
    {
        printf("Writing a message to the log." . $message);
    }

    /**
     * Get the value of fileName
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set the value of fileName
     *
     * @return  self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }
}
