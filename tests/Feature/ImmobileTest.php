<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Immobile;
use App\Models\Operation;
class ImmobileTest extends TestCase
{
	

    /**
     * A basic test example.
     *
     * @return void
     */
 
    public function testExample()
    { 
    	$response = $this->get('/');
    	 $response->assertStatus(200);
        $this->assertTrue(true);
	$user = new User([
			    'id' => 5,
			    'name' => 'yish',
			    'password' => '$2y$10$UpM76hs1UCO8YGXp5YxCLelqO5dnLWXQfaiPPWKqWQRo.QoAgBDZK',
			    'is_permission' => '1'
		]);
	$immobile = new Immobile([
				'id' => 1,
				'title' => 'TITULO'
		]);
	$operation = new Operation([
				'id' => 1,
				'name' => 'TITULO'
		]);
    	//$user = factory(App\Models\User::class)->create();

    	$this->actingAs($user);
    	$response = $this->get('admin/immobile');
    	 $response->assertStatus(200);
        $this->assertTrue(true);

        $response = $this->get('admin/immobile/create');
    	 $response->assertStatus(200);
        $this->assertTrue(true);
        $response = $this->get('admin/immobile/1/edit');
    	 $response->assertStatus(200);
        $this->assertTrue(true);
         $this->visit('admin/immobile/create')
         ->type('Taylor', 'title')
         ->type('85065060', 'cep')
         ->type('PR', 'state')
         ->type('Gpuava', 'city')
         ->type('Rua x', 'neighborhood')
         ->type('2237', 'number')
         ->type('Casa', 'type')
         ->type('3', 'bedroom')
         ->type('150', 'area')
         ->type('500', 'value')
         ->type('lorem ipsum', 'description')
         ->type('1', 'operation_id')
         ->press('Submit')
         ->seePageIs('/admin/immobile');
        
    }


}
  