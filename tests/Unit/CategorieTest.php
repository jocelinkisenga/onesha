<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Category;

class CategorieTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_unique_name()
    {
        $Category = new Category();
        $categorie = $Category->create([
            'name'=>'habillement'
            ]);
        $categorie1 = $Category->create([
            'name'=>'jango'
            ]);
        if ($categorie->name == $categorie1->name){
            $this->assertTrue(true);
        }
        
    }
}
