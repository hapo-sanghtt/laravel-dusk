<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Faker\Factory as Faker;


class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     // $faker = Faker::create();
    //     // $password = $faker->password;
    //     $this->browse(function (Browser $browser) {
    //         $password = 'Aa@12345';
    //         $faker = Faker::create();
    //         $name = $faker->name;
    //         $browser->visit('/register')
    //                 ->type('name', $name)
    //                 ->type('email', $faker->email)
    //                 ->type('password', $password)
    //                 ->type('password_confirmation', $password)
    //                 ->click('.btn-primary');

    //         $browser->assertSeeLink($name)
    //                 ->assertPathIs('/home');
    //     });
    // }
}
