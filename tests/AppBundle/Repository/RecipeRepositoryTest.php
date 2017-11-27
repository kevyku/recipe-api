<?php

use AppBundle\Entity\Recipe;
use AppBundle\Memory\RecipeMemory;
use AppBundle\Repository\RecipeRepository;
use PHPUnit\Framework\TestCase;

class RecipeRepositoryTest extends TestCase
{
    const TEST_CSV = './tests/recipe-data.csv';

    private function sampleRecipe()
    {
        return new Recipe(array(
            "box_type" => "vegetarian",
            "title" => "Test",
            "slug" => "sweet-chilli-and-lime-beef-on-a-crunchy-fresh-noodle-salad",
            "short_title" => "",
            "marketing_description" => "Here we've used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you're a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be",
            "calories_kcal" => 401,
            "protein_grams" => 12,
            "fat_grams" => 35,
            "carbs_grams" => 0,
            "bulletpoint1" => "",
            "bulletpoint2" => "",
            "bulletpoint3" => "",
            "recipe_diet_type_id" => "meat",
            "season" => "all",
            "base" => "noodles",
            "protein_source" => "beef",
            "preparation_time_minutes" => 35,
            "shelf_life_days" => 4,
            "equipment_needed" => "Appetite",
            "origin_country" => "Great Britain",
            "recipe_cuisine" => "asian",
            "in_your_box" => "",
            "gousto_reference" => 59
        ));
    }

    public function testFindAllRecipes()
    {
        $repo = new RecipeRepository(new RecipeMemory(self::TEST_CSV));
        $recipes = $repo->findAllRecipesForCuisine(10, 0, 'british');
        $this->assertNotEmpty($recipes);
    }

    public function testFindExistingRecipeById()
    {
        $repo = new RecipeRepository(new RecipeMemory(self::TEST_CSV));
        $recipe = $repo->findRecipeById(1);
        $this->assertEquals(1, $recipe->getId());
    }
}
