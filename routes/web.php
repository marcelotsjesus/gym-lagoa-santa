<?php

use App\Livewire\LandingPage;
use Illuminate\Support\Facades\Route;
use App\Services\Relaticle\Facades\Relaticle;
use App\Http\Controllers\LeadExportController;

Route::get('/crmx/leads/export', LeadExportController::class)
    
    ->name('crm.leads.export');

Route::get('/', LandingPage::class)->name('home');

Route::get('/crme', function () {
    // Listar empresas com filtro e paginação
    $result = Relaticle::people()->create([
        'name' => 'Marcelo Santos',
        'email' => 'marcelo.santos@teste.br'    
    ]);

    $resultDeal = Relaticle::opportunities()->create([
        'name' => 'LP - Oportunidade '. time(), 
        'contact_id' => $result['id'],
        'custom_fields' => [
            'Stage' => 'Prospecting'
        ]
    ]);

    dd($result, $resultDeal);
    

    return response()->json([
        'data' => $result->data,
        'total' => $result->total(),
        'has_more_pages' => $result->hasMorePages(),
    ]);

});