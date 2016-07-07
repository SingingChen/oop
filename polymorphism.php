<?php
interface dataTransferImterface//定義網站傳送資料
{
    public function dataID();//資料ID
    public function data();//資料內容
}
class dataStorage//網站獲得 存取資料用
{

    public function addData(dataTransferImterface $dataTransfer)//取得資料方法
    {
        protected $dataArray =[];
       $arrayKey= $dataTransfer->dataID();
        $arrayValue=$dataTransfer->data();
        $this->dataArray[$arrayKey]=$arrayValue;
    }
}