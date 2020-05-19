<?php namespace Watchlear\Movies\Components;


use Cms\Classes\ComponentBase;
use Input;
use Mail;
use October\Rain\Exception\ValidationException;

use Watchlear\Movies\Models\Actor;

class ActorForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Actor Form',
            'description' => 'A simple form to add Actor'
        ];
    }

    public function onSave()
    {
        // Get request data
        $data = \Input::only([
            'name',
            'lastname'
        ]);

        // Validate request
        $this->validate($data);

        $actor = new Actor;
        $actor->name = Input::get('name');
        $actor->lastname = Input::get('lastname');
        $actor->actorimage = Input::file('actorimage');
        $actor->save();

        // // Send email
        // $receiver = 'azakgcool@gmail.com';

        // \Mail::send('watchlear.contact::mail.message', $data, function ($message) use ($receiver) {
        //     $message->to($receiver);
        // });
    }

    protected function validate(array $data) 
    {
        // Validate request
        $rules = [
            'name' => 'required|min:3|max:255',
            'lastname' => 'required|min:3|max:255'
        ];

        $validator = \Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}