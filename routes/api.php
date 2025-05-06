<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    BanjarController,
    ReligionController,
    DisabilityController,
    FamilyPlanningMethodController,
    BloodTypeController,
    PregnancyStatusController,
    InsuranceTypeController,
    HouseholdLevelController,
    ElectronicIdController,
    OccupationController,
    LastEducationLevelController,
    CurrentEducationLevelController,
    GenderController,
    ResidencyStatusController,
    MaritalStatusController,
    ElectronicIdStatusController,
    NationalityController,
    AgeGroupController,
    ElderAgeGroupController,
    SidLastEducationLevelController,
};

Route::apiResource("/v1/field/banjars", BanjarController::class);

// OpenSID Standard
Route::prefix('v1/opensid/citizen-fields')->group(function () {
    Route::apiResource("last-education-levels", SidLastEducationLevelController::class);
});

// Native Standard
Route::prefix('v1/citizen-fields')->group(function () {
    Route::apiResource('religions', ReligionController::class);
    Route::apiResource('disabilities', DisabilityController::class);
    Route::apiResource('family-planning-methods', FamilyPlanningMethodController::class);
    Route::apiResource('blood-types', BloodTypeController::class);
    Route::apiResource('pregnancy-statuses', PregnancyStatusController::class);
    Route::apiResource('insurance-types', InsuranceTypeController::class);
    Route::apiResource('household-levels', HouseholdLevelController::class);
    Route::apiResource('electronic-ids', ElectronicIdController::class);
    Route::apiResource('occupations', OccupationController::class);
    Route::apiResource('last-education-levels', LastEducationLevelController::class);
    Route::apiResource('current-education-levels', CurrentEducationLevelController::class);
    Route::apiResource('genders', GenderController::class);
    Route::apiResource('residency-statuses', ResidencyStatusController::class);
    Route::apiResource('marital-statuses', MaritalStatusController::class);
    Route::apiResource('electronic-id-statuses', ElectronicIdStatusController::class);
    Route::apiResource('nationalities', NationalityController::class);
    Route::apiResource('age-groups', AgeGroupController::class);
    Route::apiResource('elder-age-groups', ElderAgeGroupController::class);
});
