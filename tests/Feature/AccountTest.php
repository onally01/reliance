<?php

namespace Tests\Feature;

use App\Services\AccountService;
use App\Services\GuzzleClientService;
use GuzzleHttp\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



//    public function testReservedAccount(){
//
//    }
//
//    public function testDeactivateReservedAccount(){
//
//    }
//
//
//    public function testTransactionStatus(){
//
//    }



}
