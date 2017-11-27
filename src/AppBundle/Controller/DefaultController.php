<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Recipe;
use FOS\RestBundle\Controller\FOSRestController;

use Symfony\Component\HttpFoundation\Request;


class DefaultController extends FOSRestController
{
    const RECIPES_PER_PAGE = 5;

    private function getRecipeRepository()
    {
        return $this->get('app.recipe_repository');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAllRecipesAction(Request $request)
    {
        $limit = $request->get('limit') ? $request->get('limit') : self::RECIPES_PER_PAGE;
        $offset = $request->get('offset') ? $request->get('offset') : 1;

        if ($limit) {
            if (!filter_var($limit, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1)))) {
                return $this->handleView($this->view(null, 400));
            }
        }
        if ($offset) {
            if (!filter_var($offset, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1)))) {
                return $this->handleView($this->view(null, 400));
            }
        }

        $cuisine = strtolower($request->get('cuisine'));
        $repo = $this->getRecipeRepository();

        $recipes = $repo->findAllRecipesForCuisine($limit, $offset, $cuisine);

        return $this->handleView($this->view($recipes, 200));

    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showRecipeAction($id)
    {
        $repo = $this->getRecipeRepository();
        $recipe = $repo->findRecipeById($id);
        if ($recipe) {
            $view = $this->view($recipe, 200);
        } else {
            $view = $this->view(null, 404);
        }
        return $this->handleView($view);
    }

}
