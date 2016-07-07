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
    public function getdataID()
    {
        $key="key";
        return $key;
    }
    public function getdata()
    {
        $value="value";
        return $value;
    }


}


//實際產生物件後使用