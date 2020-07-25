<?php 
  namespace App\Controller;
  
  class PostsController extends AppController {
    
    // $autoRender で view file が自動的に読み込まれなくなる
    // public $autoRender = false; 
    
    //このコントローラー内の全てのアクションのレイアウトを変更
    public function initialize() :void
    {
      //indexでもviewでも同じレイアウトが設定されるようになる
      parent::initialize();
      $this->viewBuilder()->setLayout('test');
    }
    
    //index メソッド
    public function index() {
      //this url can access index.
      //http://localhost:8888/Mystyle/Posts
      // echo "Posts Index";
    }
    
    //view メソッド でパラメータを取得  http://localhost:8888/Mystyle/Posts/view/1 viewの後の数字が取得表示される
    // action/○○  ←アクションスラッシュ以降の文字列を引数として受け取れる
    public function view($id = null)
    {
      // echo "ID:" . $id. "Posts view";
      
      //defaultのレイアウト default.phpの自動読み込みを拒否する ↓
      // $this->viewBuilder()->disableAutoLayout();
      
      //表示したいレイアウトを指定する ↓
      $this->viewBuilder()->setLayout('test');
      
      //変数をコントローラーからviewに渡す viewに変数を渡すにはsetメソッドを使う
      //引数に連想配列を入れる
      //キーの部分がviewで使う変数名になる
      // $this->set(['id'=>$id]);
      //キーと変数の文字列が同じ場合は簡略化できる。
      $title = 'View.php';
      $this->set(compact(['id','title']));
      
      //呼びたいview file を指定する renderメソッド
      $this->render('/Posts/index');//ここではindex view を呼び出している
      
    }
  }
 ?>