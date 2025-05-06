<?php

use Illuminate\Support\Facades\Route;

Route::apiResource("/v1/field/banjars", \App\Http\Controllers\Api\BanjarController::class);
Route::apiResource("/v1/opensid/citizen-fields/last-education-levels", \App\Http\Controllers\Api\SidLastEducationLevelController::class);
Route::apiResource("/v1/citizen-fields/religions", \App\Http\Controllers\Api\ReligionController::class);
Route::apiResource('/v1/citizen-fields/disabilities', \App\Http\Controllers\Api\DisabilityController::class);
Route::apiResource('/v1/citizen-fields/family-planning-methods', \App\Http\Controllers\Api\DisabilityController::class);
Route::apiResource('/v1/citizen-fields/', \App\Http\Controllers\Api\FamilyPlanningMethodController::class);
Route::apiResource('/v1/citizen-fields/blood-types', \App\Http\Controllers\Api\BloodTypeController::class);
Route::apiResource('/v1/citizen-fields/pregnancy-statuses', \App\Http\Controllers\Api\PregnancyStatusController::class);
Route::apiResource('/v1/citizen-fields/insurance-types', \App\Http\Controllers\Api\InsuranceTypeController::class);
Route::apiResource('/v1/citizen-fields/household-levels', \App\Http\Controllers\Api\HouseholdLevelController::class);
Route::apiResource('/v1/citizen-fields/electronic-ids', \App\Http\Controllers\Api\ElectronicIdController::class);
Route::apiResource('/v1/citizen-fields/occupations', \App\Http\Controllers\Api\OccupationController::class);
Route::apiResource('/v1/citizen-fields/last-education-levels', \App\Http\Controllers\Api\LastEducationLevelController::class);
Route::apiResource('/v1/citizen-fields/current-education-levels', \App\Http\Controllers\Api\CurrentEducationLevelController::class);
Route::apiResource('/v1/citizen-fields/genders', \App\Http\Controllers\Api\GenderController::class);
Route::apiResource('/v1/citizen-fields/residency-statuses', \App\Http\Controllers\Api\ResidencyStatusController::class);
Route::apiResource('/v1/citizen-fields/marital-statuses', \App\Http\Controllers\Api\MaritalStatusController::class);
Route::apiResource('/v1/citizen-fields/electronic-id-statuses', \App\Http\Controllers\Api\ElectronicIdStatusController::class);
Route::apiResource('/v1/citizen-fields/nationalities', \App\Http\Controllers\Api\NationalityController::class);
Route::apiResource('/v1/citizen-fields/age-groups', \App\Http\Controllers\Api\AgeGroupController::class);
Route::apiResource('/v1/citizen-fields/elder-age-groups', \App\Http\Controllers\Api\ElderAgeGroupController::class);
