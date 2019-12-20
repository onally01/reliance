<?php


namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

class GuzzleClientService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function get(string $url, array $headers = null)
    {
        try
        {
            $response = $this->client->request('GET',$url,['headers' => $headers]);
            return json_decode($response->getBody(),true);
        }
        catch(ConnectException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }
        catch(ClientException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }
        catch(RequestException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }
        catch (\Exception $exception){
            return json_decode($exception->getResponse()->getBody(),true);
        }
    }

    public function post(string $url,array $params = null, array $headers = null){

        try{
            $response = $this->client->request('POST',$url,[
                'json'=> $params,
                'headers' => $headers
            ]);
            return json_decode($response->getBody(),true);
        }
        catch(ConnectException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }
        catch(ClientException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }

    }

    public function delete(string $url, array $headers = null)
    {
        try
        {
            $response = $this->client->request('DELETE',$url,['headers' => $headers]);
            return json_decode($response->getBody(),true);
        }
        catch(ConnectException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }
        catch(ClientException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }
        catch(RequestException $exception)
        {
            return json_decode($exception->getResponse()->getBody(),true);
        }
        catch (\Exception $exception){
            return json_decode($exception->getResponse()->getBody(),true);
        }
    }
}