<?php

namespace App\Http\Controllers;

use App\Models\UserIntegration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller {
    
    public function userIntegration() {
        $user = Auth::user();
        
        $userIntegrationModel = new UserIntegration($user->id);
        
        return view('config.user.integration', [
            'notion' => $userIntegrationModel->notion,
            'notion_db' => $userIntegrationModel->notion_db
        ]);
    }
    
    public function setUserIntegration(Request $request) {
        $name = $request->get('name');
        $value = $request->get('value');
        
        $user = Auth::user();
        
        $userIntegrationModel = new UserIntegration($user->id);
        $userIntegrationModel->{$name} = $value;
    }
    
}
