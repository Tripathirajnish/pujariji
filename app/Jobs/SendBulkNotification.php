<?php

namespace App\Jobs;

use App\Models\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendBulkNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $sender;
    protected $title;
    protected $body;

    /**
     * Create a new job instance.
     *
     * @param $sender
     * @param $title
     * @param $body
     */
    public function __construct($sender, $title, $body)
    {
        $this->sender = $sender;
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fcm = get_fcm_key($this->sender);
        $type = get_vendor_name($this->sender)['type'] == 'Jajmaan' ? '0' : '1';

        $save = Notifications::create([
            'notfication_to' => $type,
            'send_to' => $this->sender,
            'notification_by' => 'Admin',
            'date' => date('d-m-Y'),
            'msg' => $this->body,
            'title' => $this->title,
            'body' => $this->body,
            'image' => '',
        ]);

        $send = send_individual_nitification($fcm, $this->title, $this->body);
    }
}
