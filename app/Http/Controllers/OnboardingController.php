<?php

namespace App\Http\Controllers;

use App\Actions\CompleteOnboarding;
use App\Http\Requests\StoreInstitutionRequest;
use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class OnboardingController extends Controller
{
    /**
     * @var Institution
     */
    private $institution;

    public function __construct(Institution $institution)
    {
        $this->institution = $institution;
    }

    /**
     * Handle the incoming request.
     *
     * @param StoreInstitutionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        auth()->user()->update([
            'matric_no' => $request->matric_no,
            'level' => $request->level,
        ]);

        CompleteOnboarding::class;

        return auth()->user();
    }
}
