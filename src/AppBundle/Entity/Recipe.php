<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Rating;

class Recipe
{

    private $id;
    private $created_at;
    private $updated_at;
    private $box_type;

    /**
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @Assert\NotBlank()
     */
    private $slug;

    private $short_title;

    private $marketing_description;

    private $calories_kcal;

    private $protein_grams;

    private $fat_grams;

    private $carbs_grams;

    private $bulletpoint1;

    private $bulletpoint2;

    private $bulletpoint3;

    private $recipe_diet_type_id;

    private $season;

    private $base;

    private $protein_source;

    private $preparation_time_minutes;

    private $shelf_life_days;

    private $equipment_needed;

    private $origin_country;

    /**
     * @Assert\NotBlank()
     */
    private $recipe_cuisine;

    private $in_your_box;

    private $gousto_reference;

    private $ratings;

    /**
     * Recipe constructor.
     */
    public function __construct($data = array())
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return (int)$this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }


    /**
     * @return mixed
     */
    public function getBoxType()
    {
        return $this->box_type;
    }

    /**
     * @param mixed $box_type
     */
    public function setBoxType($box_type)
    {
        $this->box_type = $box_type;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getShortTitle()
    {
        return $this->short_title;
    }

    /**
     * @param mixed $short_title
     */
    public function setShortTitle($short_title)
    {
        $this->short_title = $short_title;
    }

    /**
     * @return mixed
     */
    public function getMarketingDescription()
    {
        return $this->marketing_description;
    }

    /**
     * @param mixed $marketing_description
     */
    public function setMarketingDescription($marketing_description)
    {
        $this->marketing_description = $marketing_description;
    }

    /**
     * @return mixed
     */
    public function getCaloriesKcal()
    {
        return (int)$this->calories_kcal;
    }

    /**
     * @param mixed $calories_kcal
     */
    public function setCaloriesKcal($calories_kcal)
    {
        $this->calories_kcal = $calories_kcal;
    }

    /**
     * @return mixed
     */
    public function getProteinGrams()
    {
        return (int)$this->protein_grams;
    }

    /**
     * @param mixed $protein_grams
     */
    public function setProteinGrams($protein_grams)
    {
        $this->protein_grams = $protein_grams;
    }

    /**
     * @return mixed
     */
    public function getFatGrams()
    {
        return (int)$this->fat_grams;
    }

    /**
     * @param mixed $fat_grams
     */
    public function setFatGrams($fat_grams)
    {
        $this->fat_grams = $fat_grams;
    }

    /**
     * @return mixed
     */
    public function getCarbsGrams()
    {
        return (int)$this->carbs_grams;
    }

    /**
     * @param mixed $carbs_grams
     */
    public function setCarbsGrams($carbs_grams)
    {
        $this->carbs_grams = $carbs_grams;
    }

    /**
     * @return mixed
     */
    public function getBulletpoint1()
    {
        return $this->bulletpoint1;
    }

    /**
     * @param mixed $bulletpoint1
     */
    public function setBulletpoint1($bulletpoint1)
    {
        $this->bulletpoint1 = $bulletpoint1;
    }

    /**
     * @return mixed
     */
    public function getBulletpoint2()
    {
        return $this->bulletpoint2;
    }

    /**
     * @param mixed $bulletpoint2
     */
    public function setBulletpoint2($bulletpoint2)
    {
        $this->bulletpoint2 = $bulletpoint2;
    }

    /**
     * @return mixed
     */
    public function getBulletpoint3()
    {
        return $this->bulletpoint3;
    }

    /**
     * @param mixed $bulletpoint3
     */
    public function setBulletpoint3($bulletpoint3)
    {
        $this->bulletpoint3 = $bulletpoint3;
    }

    /**
     * @return mixed
     */
    public function getRecipeDietTypeId()
    {
        return $this->recipe_diet_type_id;
    }

    /**
     * @param mixed $recipe_diet_type_id
     */
    public function setRecipeDietTypeId($recipe_diet_type_id)
    {
        $this->recipe_diet_type_id = $recipe_diet_type_id;
    }

    /**
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param mixed $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * @return mixed
     */
    public function getProteinSource()
    {
        return $this->protein_source;
    }

    /**
     * @param mixed $protein_source
     */
    public function setProteinSource($protein_source)
    {
        $this->protein_source = $protein_source;
    }

    /**
     * @return mixed
     */
    public function getPreparationTimeMinutes()
    {
        return (int)$this->preparation_time_minutes;
    }

    /**
     * @param mixed $preparation_time_minutes
     */
    public function setPreparationTimeMinutes($preparation_time_minutes)
    {
        $this->preparation_time_minutes = $preparation_time_minutes;
    }

    /**
     * @return mixed
     */
    public function getShelfLifeDays()
    {
        return (int)$this->shelf_life_days;
    }

    /**
     * @param mixed $shelf_life_days
     */
    public function setShelfLifeDays($shelf_life_days)
    {
        $this->shelf_life_days = $shelf_life_days;
    }

    /**
     * @return mixed
     */
    public function getEquipmentNeeded()
    {
        return $this->equipment_needed;
    }

    /**
     * @param mixed $equipment_needed
     */
    public function setEquipmentNeeded($equipment_needed)
    {
        $this->equipment_needed = $equipment_needed;
    }

    /**
     * @return mixed
     */
    public function getOriginCountry()
    {
        return $this->origin_country;
    }

    /**
     * @param mixed $origin_country
     */
    public function setOriginCountry($origin_country)
    {
        $this->origin_country = $origin_country;
    }

    /**
     * @return mixed
     */
    public function getRecipeCuisine()
    {
        return $this->recipe_cuisine;
    }

    /**
     * @param mixed $recipe_cuisine
     */
    public function setRecipeCuisine($recipe_cuisine)
    {
        $this->recipe_cuisine = $recipe_cuisine;
    }

    /**
     * @return mixed
     */
    public function getInYourBox()
    {
        return $this->in_your_box;
    }

    /**
     * @param mixed $in_your_box
     */
    public function setInYourBox($in_your_box)
    {
        $this->in_your_box = $in_your_box;
    }

    /**
     * @return mixed
     */
    public function getGoustoReference()
    {
        return (int)$this->gousto_reference;
    }

    /**
     * @param mixed $gousto_reference
     */
    public function setGoustoReference($gousto_reference)
    {
        $this->gousto_reference = $gousto_reference;
    }

    public function rate(Rating $rating)
    {
        $this->ratings[] = $rating;
    }

    public function toArray()
    {
        $array = get_object_vars($this);
        unset($array['ratings']);
        return $array;
    }

}