<?php

include __DIR__ . "/Rule.php";

class Validate
{
    private Rule $rules;
    public function __construct(private $request)
    {
        $this->rules = new Rule;
    }

    public function make()
    {
        return $this->rules->getMassage();
    }

    public function name()
    {
        $this->rules->required($this->request['name'] ?? null, 'name')
            ->min($this->request['name'] ?? null, 'name', 10)
            ->max($this->request['name'] ?? null, 'name', 50);
        return $this->rules->getMassage()['name'][0] ?? null;
    }

    public function email()
    {
        $this->rules->required($this->request['email']??null, 'email')
            ->email($this->request['email']??null, 'email');
        return $this->rules->getMassage()['email'][0] ?? null;
    }

    public function phone()
    {
        $this->rules->required($this->request['phone'] ??null, 'phone')
            ->phone($this->request['phone'] ?? null, 'phone');
        return $this->rules->getMassage()['phone'][0] ?? null;
    }

    public function whatsapp_phone()
    {
        $this->rules->required($this->request['whatsapp_phone'] ??null, 'whatsapp_phone')
            ->phone($this->request['whatsapp_phone'] ??null, 'whatsapp_phone');
        return $this->rules->getMassage()['whatsapp_phone'][0] ?? null;
    }

    public function company()
    {
        $this->rules->required($this->request['company'] ??null, 'company')
            ->max($this->request['company'] ??null, 'company', 50);
        return $this->rules->getMassage()['company'][0] ?? null;
    }
    public function address()
    {
        $this->rules->required($this->request['address'] ?? null, 'address')
            ->max($this->request['address'] ?? null, 'address', 100);
        return $this->rules->getMassage()['address'][0] ?? null;
    }

    public function subject()
    {
        $this->rules->required($this->request['subject'] ?? null, 'subject')
            ->max($this->request['subject']?? null, 'subject', 100);
        return $this->rules->getMassage()['subject'][0] ?? null;
    }

    public function message()
    {
        $this->rules->required($this->request['message'] ?? null, 'message')
            ->max($this->request['message'] ?? null, 'message', 1000);
        return $this->rules->getMassage()['message'][0] ?? null;
    }
}
