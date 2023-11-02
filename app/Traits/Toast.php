<?php
namespace App\Traits;
trait Toast
{
    private string $type ='';
    public bool $show = false;
    public array $toast = [
        'message' => '',
        'type'=>''
    ];
    public function setType(string $type) : void {

    }
    public function messageInfo($message):void
    {
        $this->type = 'info';
        $this->toast = [
            'message' => $message,
            'type' => $this->type,
        ];
        $this->show = true;
    }
}
