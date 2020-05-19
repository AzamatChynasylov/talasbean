<?php namespace Watchlear\Movies\Components;


use Cms\Classes\ComponentBase;
use Watchlear\Movies\Models\Actor;

Class Actors extends ComponentBase {

  public function componentDetails(){
    return [
      'name' => 'Actor List',
      'description' => 'Lists of Actors'
    ];
  }

  public function defineProperties()
  {
    return [
      'results' => [
        'title' => 'Number of Actors',
        'description' => 'How many Actors do you want to display?',
        'default' => 0,
        'vallidationPattern' => '^[0-9]+$',
        'validationMessage' => 'Only numbers allowed'
      ],

      'sortOrder' => [
        'title' => 'Sort Actors',
        'description' => 'Sort those Actors',
        'type' => 'dropdown',
        'default' => 'name asc'
      ]

    ];
  }

  public function getSortOrderOptions(){
    return [
      'name asc' => 'Name (assending)',
      'name desc' => 'Name (dessending)'
    ];
  }



  public function onRun(){
    $this->actors = $this->loadActors();
  }

  protected function loadActors(){
    $query = Actor::all();

    if($this->property('sortOrder') == 'name asc'){
      $query=$query->sortBy('name');
    }

    
    if($this->property('sortOrder') == 'name desc'){
      $query=$query->sortByDesc('name');
    }

    if($this->property('results')>0)
    {
      $query = $query->take($this->property('results'));
    }

    return $query;
  }

  public $actors;

}