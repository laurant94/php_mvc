<?php
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;

class DB{
  protected $db;
  protected $builder;

  function __construct()
  {
    
    try{
      $this->db = new PDO('mysql:host=localhost;dbname=' . DB_NAME, DB_USER, DB_PASS);
      $this->migrate();

      $this->insert('users', [
        "firstname"=>"luc",
        "lastname"=>"hermendez",
        "phone"=>"96558855"
      ]);
    }catch(PDOException $ex){
      print_r($ex->getMessage() );
      die();
    }
  }

  private function migrate(){
    require_once APP_ROOT . "/config/migration.php";
    foreach ($statements as $statement) {
      // $this->db->query($statement);
      $this->db->exec($statement);
    }
  }

  public function insert(string $db_name, array $data)
  {
    $keys = implode(',', array_keys($data));
    $values = implode(',', array_values($data));
    $query = "INSERT INTO $db_name($keys) VALUES ($values);";
    $response = $this->db->exec($query);
    print_r($query);
  }

  public function get(string $db_name, int $id, array $columns=[])
  {

  }

  public function list(string $db_name, array $where, array $columns=[])
  {

  }

  public function first(string $db_name, array $where, array $columns=[])
  {

  }

  public function last(string $db_name, array $where, array $columns=[])
  {

  }

  public function exec(string $command)
  {
    return $this->db->exec($command);
  }

  public function prepare(string $query, array $options=[])
  {
    return $this->db->prepare($query, $options);
  }

  private function query(string $query, $mode=PDO::ATTR_DEFAULT_FETCH_MODE)
  {
    $t = $this->db->query($query, $mode);
    // $user = '\\App\\Models\\' . 'User';
    return $t;
  }

  private function formatQuery(string $query, array $data)
  {

  }
}

// $db = new DB();