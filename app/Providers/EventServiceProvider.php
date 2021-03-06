<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserProfile' => [
            'App\Listeners\CreateProfile',
        ],
        'App\Events\UserCompanyProfile' => [
            'App\Listeners\CreateCompanyProfile',
        ],
        'App\Events\TemplateSection' => [
            'App\Listeners\CreateTemplateSection',
        ],
        'App\Events\QuestionChoice' => [
            'App\Listeners\CreateQuestionChoice',
        ],
        'App\Events\QuestionDetail' => [
            'App\Listeners\CreateQuestionDetail',
        ],
        'App\Events\QuestionSolution' => [
            'App\Listeners\CreateQuestionSolution',
        ],
         'App\Events\CodingQuestionDetail' => [
            'App\Listeners\CreateCodingQuestionDetail',
        ],
        'App\Events\CodingEntries' => [
            'App\Listeners\CreateCodingEntries',
        ],
        'App\Events\CodingQuestionLanguage' => [
            'App\Listeners\CreateCodingQuestionLanguage',
        ],
        'App\Events\CodingTestCases' => [
            'App\Listeners\CreateCodingTestCases',
        ],
        'App\Events\QuestionSubmissionEvaluation' => [
            'App\Listeners\CreateQuestionSubmissionEvaluation',
        ],
        'App\Events\QuestionSubmissionResource' => [
            'App\Listeners\CreateQuestionSubmissionResource',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
