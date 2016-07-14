<?php
interface dataTransferImterface//定義網站傳送資料
{
    public function getdataID();//資料ID
    public function getdata();//資料內容
}
class dataStorage//網站獲得 存取資料用
{
    protected $dataArray =[];//宣告存放資料用的陣列
    public function addData(dataTransferImterface $dataTransfer)//取得資料方法
    {
       $arrayKey= $dataTransfer->getdataID();
        $arrayValue=$dataTransfer->getdata();
        $this->dataArray[$arrayKey]=$arrayValue;
    }
    public function getDataArray()
    {
        return $this->dataArray;
    }
}
//練習做一個使用該介面的物件

class transferProtocolA implements dataTransferImterface
{
    private  $dataID;
    private  $data;

    public function __construct($key,$value)
    {
        $this->key=$key;
        $this->value=$value;
    }

    public function getdataID()
    {
//        $key="key";
//        return $key;
       return $this->dataID;

    }
    public function getdata()
    {
//        $value="value";
//        return $value;
        return $this->data;
    }
}

class transferPortocolHttp implements  dataTransferImterface{
    private  $dataID;
    private  $data;
    public function __construct($http)//透過網址 儲存網頁
    {
        $this->dataID=$http;
    }
    public function getdataID()
    {
        return $this->dataID;
    }
    public function getdata()
    {
        //在這透過網址抓取網頁 直接傳過去
return"測試資料";
    }
}

//實際產生物件後使用
$dataStorage= new dataStorage();
//$transferProtocolA = new transferProtocolA();
$transferProtocolA = new transferProtocolA("001","資料測試1");

$dataStorage->addData($transferProtocolA);
$dataStorage->addData(new transferProtocolA("002","資料測試2"));
$dataStorage->addData(new transferPortocolHttp("tw.yahoo.com"));

$dataArray =$dataStorage->getDataArray();
