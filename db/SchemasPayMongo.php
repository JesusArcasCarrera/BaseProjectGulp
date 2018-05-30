<?php

class Pay
{

    function __construct($datas)
    {
        foreach ($datas as $key => $value) {
            $this->PayArray[$key]=$value;
        }
    }


    function getJson(){
        return json_encode($this->PayArray);
    }
    function getArray(){
        return $this->PayArray;
    }

   
    function update($json)
    {
        foreach ($json as $key => $value) {
            if($key != "id" && $key != "date")
                $this->PayArray[$key] = $value;
        }
    }
    

/*
        function setIdApp($x){$$this->PayArray['idApp']=$x;}
        function setIdOperation($x){$$this->PayArray['idOperation']=$x;}
        function setType($x){$$this->PayArray['type']=$x;}
        function setTxnId($x){$$this->PayArray['txnId']=$x;}
        function setStatus($x){$$this->PayArray['status']=$x;}
        function setInvoice($x){$$this->PayArray['invoice']=$x;}
        function setCurrencyCode($x){$$this->PayArray['currencyCode']=$x;}
        function setAmountPaid($x){$$this->PayArray['amountPaid']=$x;}
        function setErrors($x){$$this->PayArray['errors']=$x;}

        function getId(){return $$this->PayArray['id'];}
        function getIdApp(){return $$this->PayArray['idApp'];}
        function getIdOperation(){return $$this->PayArray['idOperation'];}
        function getType(){return $$this->PayArray['type'];}
        function getTxnId(){return $$this->PayArray['txnId'];}
        function getStatus(){return $$this->PayArray['status'];}
        function getInvoice(){return $$this->PayArray['invoice'];}
        function getCurrencyCode(){return $$this->PayArray['currencyCode'];}
        function getAmountPaid(){return $$this->PayArray['amountPaid'];}
        function getDate(){return $$this->PayArray['date'];}
        function getErrors(){return $$this->PayArray['errors'];}

*/

}
class Operation
{

    function __construct($datas)
    {
        foreach ($datas as $key => $value) {
            $this->OperationArray[$key]=$value;
        }
    }


    function getJson()    {            
        return json_encode($this->OperationArray);
    }

    function makeArray()    {
        return $this->OperationArray;
    }

    
    function updateJSON($json)
    {
        foreach ($json as $key => $value) {
            if($key != "id" && $key != "date")
                $this->OperationArray[$key] = $value;
        }
    }
    function update($key,$value){
        $this->InvoiceArray[$key] = $value;
    }

/*
    function setIdApp($x){$this->OperationArray['idApp']=$x;}
    function setIdPayer($x){$this->OperationArray['idPayer']=$x;}
    function setType($x){$this->OperationArray['type']=$x;}
    function setStatus($x){$this->OperationArray['status']=$x;}
    function setDate($x){$this->OperationArray['date']=$x;}
    function setCurrencyCodeExpected($x){$this->OperationArray['currencyCodeExpected']=$x;}
    function setPrice($x){$this->OperationArray['price']=$x;}
    function setCodePrice($x){$this->OperationArray['codePrice']=$x;}
    function setIdStar($x){$this->OperationArray['idStar']=$x;}
 
    function getIdApp(){return $this->OperationArray['idApp'];}
    function getIdPayer(){return $this->OperationArray['idPayer'];}
    function getType(){return $this->OperationArray['type'];}
    function getStatus(){return $this->OperationArray['status'];}
    function getDate(){return $this->OperationArray['date'];}
    function getCurrencyCodeExpected(){return $this->OperationArray['currencyCodeExpected'];}
    function getPrice(){return $this->OperationArray['price'];}
    function getCodePrice(){return $this->OperationArray['codePrice'];}
    function getIdStar(){return $this->OperationArray['idStar'];}

 */



}

class Payer
{

    function __construct($datas)
    {
          foreach ($datas as $key => $value) {
            $this->PayerArray[$key]=$value;
        }     
    }


    function getJson()
    {
       return json_encode($this->PayerArray);
    }
    function makeArray()
    {
        return $this->PayerArray;
    }

    
    function updateJSON($json)
    {

         $this->json = $json;

        $json = json_decode($json, true);
        foreach ($json as $key => $value) {
                if($key != "id" && $key != "date")
                    $this->OperationArray[$key] = $value;
            }
    }
    function update($key,$value){
        $this->InvoiceArray[$key] = $value;
    }
/*
        function setIdApp($x){$this->PayerArray['idApp']=$x;}
        function setIdOperation($x){$this->PayerArray['idOperation']=$x;}
        function setEmail($x){$this->PayerArray['email']=$x;}
        function setName($x){$this->PayerArray['name']=$x;}
        function setSurnames($x){$this->PayerArray['surnames']=$x;}
        function setAddress($x){$this->PayerArray['address']=$x;}
        function setNumberPhone($x){$this->PayerArray['numberPhone']=$x;}
        function setIp($x){$this->PayerArray['ip']=$x;}
        function setGeolocation($x){$this->PayerArray['geolocation']=$x;}
        function setStatus($x){$this->PayerArray['status']=$x;}
        function setEmailGeolocation($x){$this->PayerArray['emailGeolocation']=$x;}

        function getId(){return $this->PayerArray['id'];}
        function getIdApp(){return $this->PayerArray['idApp'];}
        function getIdOperation(){return $this->PayerArray['idOperation'];}
        function getEmail(){return $this->PayerArray['email'];}
        function getName(){return $this->PayerArray['name'];}
        function getSurnames(){return $this->PayerArray['surnames'];}
        function getAddress(){return $this->PayerArray['address'];}
        function getNumberPhone(){return $this->PayerArray['numberPhone'];}
        function getIp(){return $this->PayerArray['ip'];}
        function getGeolocation(){return $this->PayerArray['geolocation'];}
        function getStatus(){return $this->PayerArray['status'];}
        function getEmailGeolocation(){return $this->PayerArray['emailGeolocation'];}
        function getDate(){return $this->PayerArray['date'];}
  */      
  
}


class Invoice
{

    function __construct($datas)
    {
          foreach ($datas as $key => $value) {
            $this->InvoiceArray[$key]=$value;
        }     
    }


    function getJson()
    {
       return json_encode($this->InvoiceArray);
    }
    function makeArray()
    {
        return $this->InvoiceArray;
    }

    
    function updateJSON($json)
    {

         $this->json = $json;

        $json = json_decode($json, true);
        foreach ($json as $key => $value) {
                if($key != "id" && $key != "date")
                    $this->OperationArray[$key] = $value;
            }
    }
    function update($key,$value){
        $this->InvoiceArray[$key] = $value;
    }
}