<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Tests\Browser\Pages\CreateTaskPage;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateTaskTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_I_can_create_task_successfully()
    {
        $this->browse(function ($browser) {

            // $user = User::factory()->create();

            $browser->visit('/tasks/create')
                    ->type('title', 'My Task')
                    ->press('Add Task')
                    ->pause(5000)
                    ->assertPathIs('/tasks');
        });
    }
}