<?php 
  //src/Model/Table/ArticlesTable.php
  namespace App\Model\Table;
  
  use Cake\ORM\Table;
  
  /**
   * articlesTableと名付けると、cakephpは命名規則によってarticlesテーブルを使うモデルなんだなと判断してくれる
   */
  class  ArticlesTable extends Table
  {
    
    public function initialize(array $config) : void
    {
      $this -> addBehavior('Timestamp');
    }
  }
  
 ?>