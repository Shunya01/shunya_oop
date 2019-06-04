<!-- 次の「Kidクラス」を作ってください。

プロパティ：名前($name)、性別($sex)
メソッド：showName()
男なら「○○くん」、女なら「○○ちゃん」を返す処理を行う
名前プロパティの初期値は「Seed」、性別プロパティの初期値は「boy」にすること
プロパティのゲッター・セッターメソッドを用意し、メソッド経由でプロパティにアクセスできるようにすること
オブジェクトからプロパティ値を設定し、showNameメソッドを呼び出して出力すること -->
<?php

echo "第一問<br>";

$kid = new Kid();

$kid->setName('Shunya');
$kid->setSex('girl');


$kid->showname();

class Kid{
    private $name;
    private $sex;

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

    public function setSex($seibetu){
        $this->sex=$seibetu;
            }

    public function getSex(){
        return $this->sex;
    }

    function showname(){
        if ($this->sex=='boy') {
        echo "$this->name"."くん";
        }
        elseif ($this->sex=='girl') {
        echo "$this->name"."ちゃん";
        }
        else {
        echo "boyかgirlを選んでください";
        }

    }

// 演習問題１で作成したKidクラスに、初期値「10」の「年齢（$age）」プロパティも追加して、12歳以上なら「○○君／○○さん」と出力されるようにしてください。






















}