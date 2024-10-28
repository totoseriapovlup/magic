<?php


class Session
{
    private $properties = [];

    public function __construct()
    {
        session_start();
        $this->read(['errors', 'message']);
    }

    /**
     * reade once properties from session
     * @param array $keys
     */
    private function read(array $keys){
        foreach ($keys as $key){
            if(!empty($_SESSION[$key])){
                $this->properties[$key] = $_SESSION[$key];
                unset($_SESSION[$key]);
            }
        }
    }

    public function write(string $key,mixed $data){
        $_SESSION[$key] = $data;
    }

    /**
     * @return array
     */
    public function get(string $property)
    {
        if(isset($this->properties[$property])){
            return $this->properties[$property];
        }
        return null;
    }
}