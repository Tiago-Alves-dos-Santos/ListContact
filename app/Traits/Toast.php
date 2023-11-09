<?php

namespace App\Traits;

use App\Enum\TypeAlert;

trait Toast
{
    private string $type = '';
    public array $toast = [
        'message' => '',
        'type' => ''
    ];
    private function loadToast($message, $type)
    {
        $this->type = $type;
        $this->toast['message'] = $message;
        $this->toast['type'] = $this->type;
        $this->show = true;
    }
    public function getType(): TypeAlert
    {
        $reflectionClass = new \ReflectionClass(TypeAlert::class);
        $options = $reflectionClass->getConstants();
        return $options[strtoupper($this->type)];
    }
    public function messageInfo($message): void
    {
        $this->loadToast($message, TypeAlert::INFO->value);
    }
    public function messageWarning($message): void
    {
        $this->loadToast($message, TypeAlert::WARNING->value);
    }
    public function messageDanger($message): void
    {
        $this->loadToast($message, TypeAlert::DANGER->value);
    }
}
