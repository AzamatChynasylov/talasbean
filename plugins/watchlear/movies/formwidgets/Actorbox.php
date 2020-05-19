<?php namespace Watchlear\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Congig;

use Watchlear\Movies\Models\Actor;

class ActorBox extends FormWidgetBase
{
	public function widgetDetails()
	{
		return [
			'name' => 'Actorbox',
			'description' => 'Field for adding Actors'
		];
	}

	public function render(){
		$this->prepareVars();
	//	dump($this->vars['actors']);
		return $this->makePartial('widget');
	}

	public function prepareVars()
	{
		$this->vars['id'] = $this->model->id;
		$this->vars['actors'] = Actor::all()->lists('full_name','id');
		$this->vars['name'] = $this->formField->getName().'[]';
		
		if(!empty($this->getLoadValue()))
		{
			$this->vars['selectValues'] = $this->getLoadValue();
		}
		else
		{
			$this->vars['selectValues'] = [];
		}
	}

	public function getSaveValue($actors){
		$newArray = [];

		foreach($actors as $actorID){
			if(!is_numeric($actorID)){
				$newActor = new Actor;
				$nameLastname = explode(' ', $actorID);
				$newActor->name = $nameLastname[0];
				$newActor->lastname = $nameLastname[1];
				$newActor->save();
				$newArray[] = $newActor->id;
			}else{
				$newArray[]= $actorID;
			}
		}

		return $newArray;

	}

	public function loadAssets()
	{
		$this->addCss('css/select2.min.css');
		$this->addJs('js/select2.min.js');
	}
}