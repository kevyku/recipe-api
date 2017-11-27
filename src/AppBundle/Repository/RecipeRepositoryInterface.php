<?php

namespace AppBundle\Repository;


use AppBundle\Entity\Recipe;

interface RecipeRepositoryInterface
{
    /**
     * @param $limit
     * @param $offset
     * @return array
     */
    public function findAllRecipesForCuisine($cuisine, $limit, $offset);

    /**
     * @param $id
     * @return Recipe
     */
    public function findRecipeById($id);


}