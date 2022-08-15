<?php

namespace App\Http\Livewire;

use App\Models\SocialNetwork;
use App\Models\Survey;
use Livewire\Component;

class ModalSurvey extends Component
{
    public Array $data = [
        'email' => '',
        'age' => '',
        'gender' => '',
        't_facebook' => '0',
        't_whatsapp' => '0',
        't_twitter' => '0',
        't_instagram' => '0',
        't_tiktok' => '0',
        'most_beloved_rrss' => '',
        'least_favorite_rrss' => '',
    ];

    protected $rules = [
        'data.email' => 'required|email:rfc,dns|unique:surveys,email',
        'data.age' => 'required|in:18-25,26-33,34-40,40+',
        'data.gender' => 'required|in:m,w,o',
        'data.t_facebook' => 'numeric',
        'data.t_whatsapp' => 'numeric',
        'data.t_twitter' => 'numeric',
        'data.t_instagram' => 'numeric',
        'data.t_tiktok' => 'numeric',
        'data.most_beloved_rrss' => 'required',
        'data.least_favorite_rrss' => 'required',
    ];

    protected $messages = [
        'data.email.required' => 'El correo electrónico es requerido',
        'data.email.email' => 'Debes introdicir un correo electrónico válido',
        'data.email.unique' => 'Ya hay una encuesta realizada con este correo electrónico',
        'data.age.required' => 'Debes seleccionar un rango de edad',
        'data.age.in' => 'El rango de edad seleccionado no es válido',
        'data.gender.required' => 'Debes seleccionar un genero',
        'data.gender.in' => 'El genero seleccionado no es válido',
        'data.t_facebook.numeric' => 'El valor debe ser numérico',
        'data.t_whatsapp.numeric' => 'El valor debe ser numérico',
        'data.t_twitter.numeric' => 'El valor debe ser numérico',
        'data.t_instagram.numeric' => 'El valor debe ser numérico',
        'data.t_tiktok.numeric' => 'El valor debe ser numérico',
        'data.most_beloved_rrss.required' => 'Debes seleccionar la red social mas querida',
        'data.least_favorite_rrss.required' => 'Debes seleccionar la red social menos querida',
    ];

    public function render()
    {
        return view('livewire.modal-survey', ['socialNetworks' => SocialNetwork::all()]);
    }

    public function submit()
    {
        $this->validate();
        
        $survey = new Survey($this->data);
        $survey->save();
        $this->reset('data');
        $this->dispatchBrowserEvent('survey-sent', ['message' => 'Encuesta enviada satisfactoriamente']);
    }
}
