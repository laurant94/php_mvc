<?php
namespace App\Models;

class Product{
  protected $id;
  protected $title;
  protected $description;
  protected $price;
  protected $sku;
  protected $image;

  // GET METHODS
  public function getId(){
    return $this->id;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getDescription(){
    return $this->description;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getSku(){
    return $this->sku;
  }

  public function getImage(){
    return $this->image;
  }

  // SET METHODS
  public function setTitle(string $title){
    $this->id = $title;
  } 

  public function setDescription(string $description){
    $this->description = $description;
  }

  public function setPrice(string $price){
    $this->price = $price;
  }

  public function setSku(string $sku){
    $this->sku = $sku;
  }

  public function setImage(string $image){
    $this->image = $image;
  }

  public function save(){

  }

  // CRUD OPERATIONS
  static function create(array $data){

  }

  static function read(int $id){
    global $db;
    $row = $db->table('products')->where($id)->get()->first();

    return $row;
  }

  public function update(int $id, array $data){

  }

  public function delete(int $id){

  }

}