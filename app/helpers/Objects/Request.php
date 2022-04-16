<?php
class Request
{
  protected $request;

  function __construct()
  {
    switch($_SERVER['REQUEST_METHOD'])
    {
      case 'POST':
        $this->request = $_POST;
        break;
      case 'GET':
        $this->request = $_GET;
        break;
      default:
        $this->request = $_POST;
        break;
    }
  }

  public function getData(){
    return $this->request;
  } 

  public function get(string $key)
  {
    return $this->request[$key] ? htmlspecialchars($this->request[$key]) : null;
  }

}