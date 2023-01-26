<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
class SendExcel extends Mailable
{
    use Queueable;

    public $pathFile;
    public $FileName;

    public function __construct($pathFile, $FileName)
    {
        $this->pathFile = $pathFile;
        $this->FileName = $FileName;
        Log::error('error_1b');
    }

    public function build()
    {
        Log::error('error_2b');
        return $this->view('emails.sendExcel')
        ->attach($this->pathFile, [
            'as' => $this->FileName,
            'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ]);
    }

}
