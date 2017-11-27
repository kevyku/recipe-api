<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Recipe;
use AppBundle\Memory\RecipeMemory;


class RecipeRepository implements RecipeRepositoryInterface
{

    private $persistence;

    public function __construct(RecipeMemory $persistence)
    {
        $this->persistence = $persistence;
    }

    /**
     * @param $limit
     * @param $offset
     * @return array
     */
    public function findAllRecipesForCuisine($limit = 10, $offset = 0, $cuisine)
    {
        $data = $this->persistence->getData();
        $recipes = array();
        $i = 0;
        foreach ($data as $row) {
            if (($cuisine && isset($row['recipe_cuisine']) && $row['recipe_cuisine'] === $cuisine) || !$cuisine) {
                if ($i++ < $offset - 1) continue;
                if ($i > $offset - 1 + $limit) break;
                $recipes[] = new Recipe($row);
            }
        }
        return $recipes;
    }

    /**
     * @param $id
     * @return Recipe|null
     */
    public function findRecipeById($id)
    {
        $row = $this->persistence->retrieve($id);
        return $row ? new Recipe($row) : null;
    }

}