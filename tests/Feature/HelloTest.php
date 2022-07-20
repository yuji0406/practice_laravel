<?php

namespace Tests\Feature;

use App\User;
use App\Person;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{
    use DatabaseMigrations;

    public function testHello()
    {
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'test@ff.com',
            'password' => 'password',
        ]);

        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'test@ff.com',
            'password' => 'password',
        ]);

        factory(Person::class)->create([
            'name' => 'AAA',
            'mail' => 'test@gg.com',
            'age' => 123,
        ]);

        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'AAA',
            'mail' => 'test@gg.com',
            'age' => 123,
        ]);
    }
}
