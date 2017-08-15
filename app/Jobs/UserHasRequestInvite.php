<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Vluzrmos\SlackApi\Contracts\SlackUserAdmin;

class UserHasRequestInvite implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * email.
     *
     * @var string
     */
    public $email;
    /**
     * first name.
     *
     * @var string
     */
    public $firstName;
    /**
     * Last Name.
     *
     * @var string
     */
    public $lastName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $firstName, $lastName)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(SlackUserAdmin $slackUserAdmin)
    {
        $result = $slackUserAdmin->invite($this->email, [
            'first_name' => $this->firstName,
            'last_name'  => $this->lastName,
        ]);

        if (!$result->ok) {
            throw new \exception('unable to send invite due to '.$result->error);
        }
    }
}
