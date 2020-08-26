<?php

class AppError{
    private $error;
    private string $message;
    private $type;
    private $class;


    public function __construct(
     string $message='',
     $type='Unknown error',
     $error='error',
     $class = 'error error-failure')
    {
        $this->error = $error;
        $this->message = $message;
        $this->type = $type;
        $this->class=$class;
    }

    public function __get($name)
    {
        if(property_exists($this,$name)){
            return $this->$name;
        }
    }

    public function __set($name, $value)
    {
        if(property_exists($this,$name)){
            $this->$name = $value;
        }
    }

    public function __serialize(): array
    {
        return[
            'error'=>$this->error,
            'message'=>$this->message,
            'type'=>$this->type,
            'class'=>$this->class,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->error=$data['error'];
        $this->message = $data['message'];
        $this->type = $data['type'];
        $this->class= $data['class'];
    }

    public function __toString()
    {
        return 'error : '.$this->error.' message : '.$this->message.' type : '.$this->type.' class : '.$this->class;
    }
}