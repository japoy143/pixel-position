<?php

// test('that true is true', function () {
//     expect(true)->toBeTrue();
// });

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        "employer_id" => $employer->id,
    ]);

    //action and assert
    expect($job->employer->is($employer))->toBeTrue();
});


it("can have tag", function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');


    expect($job->tags)->toHaveCount(1);


});
