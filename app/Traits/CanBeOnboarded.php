<?php


namespace App\Traits;


use Illuminate\Foundation\Auth\User;

trait CanBeOnboarded
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function onboard($userId) : bool
    {
        if (! $this->user->find($userId)->update([
            'onboarded' => true,
        ])) {
            return false;
        }
        return true;
    }
}
