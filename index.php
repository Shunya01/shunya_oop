<!-- 次の「Kidクラス」を作ってください。

プロパティ：名前($name)、性別($sex)
メソッド：showName()
男なら「○○くん」、女なら「○○ちゃん」を返す処理を行う
名前プロパティの初期値は「Seed」、性別プロパティの初期値は「boy」にすること
プロパティのゲッター・セッターメソッドを用意し、メソッド経由でプロパティにアクセスできるようにすること
オブジェクトからプロパティ値を設定し、showNameメソッドを呼び出して出力すること -->
<?php

$kid = new Kid();

$car->setName('Shunya');
$car->setSex('Boy'));

$kid=>showname();

class Kid{
    public $name;
    public $sex;



function __construct(){
    $this->name = 'Seed';
    $this->sex ='boy';
}

    public function setName($namae){
        $this->name=$namae;
            }

    public function getName(){
        return $this->name;
    }

    function showname(){
        if (condition) {
            # code...
        }
    }























}