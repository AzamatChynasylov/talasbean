<?php namespace Watchlear\Contact\Components;


use Cms\Classes\ComponentBase;
use Input;
use Mail;
use October\Rain\Exception\ValidationException;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'A simple contact form'
        ];
    }

    public function onSend()
    {
        // Get request data
        $data = \Input::only([
            'name',
            'phone',
            'content',
            'formname'
        ]);

        // Validate request
        $this->validate($data);

        // Send phone
        $receiver = 'azakgcool@gmail.com';
        //begimai-akylbekova@mail.ru,Akylbekova.begimai98@gmail.com

        \Mail::send('watchlear.contact::mail.message', $data, function ($message) use ($receiver) {
            $message->to($receiver);
            $message->subject('Заявка с сайта...');
        });
    }

    protected function validate(array $data) 
    {
        // Validate request
        $rules = [
            'name' => 'required|min:3|max:255',
            'phone' => 'required|numeric'
        ];

        $validator = \Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}