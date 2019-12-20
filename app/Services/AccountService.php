<?php


namespace App\Services;


class AccountService
{
    protected $client;

    public function __construct(GuzzleClientService $client)
    {
        $this->client = $client;
    }

    public function reservedAccount($params)
    {
        $url = $this->url().'bank-transfer/reserved-accounts';

        return $this->client->post($url, $params, $this->headers());
    }

    public function deactivateReservedAccount($accountNumber)
    {
       // deactivating a reserved account means to deallocate a reserved account which is to delete
        $url = $this->url().'bank-transfer/reserved-accounts/'.$accountNumber;

        return $this->client->delete($url, $this->headers());
    }

    public function transactionStatus($referenceNo)
    {
        $url = $this->url().'merchant/transactions/query?paymentReference='.$referenceNo;

        return $this->client->get($url, $this->headers());
    }

    private function headers(){

        return [
            "Authorization"=> env('BASIC_TOKEN')
         ];
    }

    private function url(){
        return 'https://sandbox.monnify.com/api/v1/';
    }
}