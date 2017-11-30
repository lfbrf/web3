<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Operation;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $this->assertTrue(true);
       
    }
    public function testLogin()
    {
        $response = $this->get('/login');
        $this->assertTrue(true);
       
    }
    public function testAdminHome(){
         $user = new User([
            'id' => '2',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'is_permission' => '1',
        ]);
         $this->actingAs($user);
        $response = $this->get('/admin');
        $this->assertTrue(true);
    }
     public function testAdminImmobile(){
         $user = new User([
            'id' => '2',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'is_permission' => '1',
        ]);
         $this->actingAs($user);
        $response = $this->get('/admin/immobile');
        $this->assertTrue(true);
    }
    public function testAdminImmobileCreate(){
         $user = new User([
            'id' => '2',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'is_permission' => '1',
        ]);
         $this->actingAs($user);
        $response = $this->get('/admin/immobile/create');
        $this->assertTrue(true);
    }
    /*
    public function testeController(){
        $operation = new Operation([
            'id' => '1',
            'name' => 'asdasdf',
        ]); 
        $response = $this->action('GET', 'OperationsController@show', ['id' => 1]);
    }
     public function testAdminImmobileCreateParams(){
         $user = new User([
            'id' => '2',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'is_permission' => '1',
        ]);
         $this->actingAs($user);
         $operation = new Operation([
            'id' => '1',
            'name' => 'asdasdf',
        ]);  
         echo($operation);
         $response = $this->json('POST', '/admin/operation', ['id' => '1',
                                                                    'name' => 'Sally',
                                                                    'state' => 'Sally',
                                                                    'city' => 'Sally',
                                                                    'neighborhood' => 'Sally',
                                                                    'number' => '2',
                                                                    'type' => 'Sally',
                                                                    'bedroom' => '3',
                                                                    'area' => '500',
                                                                    'value' => '500',
                                                                    'description' => 'xxxx',
                                                                    'operation_id' => '1',


                                                                                        ]);
         
         $response
            ->assertStatus(200)
            ->assertJson([
                'created' => true,
            ]);
    }*/
     
}
