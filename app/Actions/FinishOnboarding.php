<?php


namespace App\Actions;


use App\Http\Requests\FinishOnboardingRequest;
use App\Models\AcademicDetails;
use App\Models\User;
use App\Traits\CanBeOnboarded;

class FinishOnboarding
{
    use CanBeOnboarded;

    public function __invoke(FinishOnboardingRequest $request)
    {
        AcademicDetails::create(array_merge(['user_id' => auth()->id()], $request->validated()));
        $this->onboard(auth()->id());
        return redirect('/dashboard');
    }
}
