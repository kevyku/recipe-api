<?php
/**
 * Created by PhpStorm.
 * User: chihhanku
 * Date: 11.11.17
 * Time: 00:08
 */

use AppBundle\Entity\Recipe;
use PHPUnit\Framework\TestCase;

class RecipeTest extends TestCase
{
    public function testCreateRecipe()
    {
        $data = array(
            'id' => 1,
            'title' => 'Test'
        );
        $recipe = new Recipe($data);
        $this->assertEquals(1, $recipe->getId());
        $this->assertEquals('Test', $recipe->getTitle());

    }
}
