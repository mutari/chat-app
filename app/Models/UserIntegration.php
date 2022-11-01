<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserIntegration extends Model {
    use HasFactory;
    
    /**
     * @var mixed|string
     */
    private array $cache = [];
    private ?int $userId = null;
    
    public function __construct(int $userId, array $attributes = []) {
        parent::__construct($attributes);
        
        $this->userId = $userId;
    }
    
    public function __get($key) {
        if(!empty($this->cache[$key])) // check for cache
            return $this->cache[$key];
        
        $userIntegrations = DB::table('user_integrations')
            ->where('name', '=', $key)
            ->where('user_id', '=', $this->userId)
            ->first();
        
        if(empty($userIntegrations->token)) // if result is empty then return null
            return null;
        
        //save database value to cache and return it
        $this->cache[$key] = $userIntegrations->token;
        return $this->cache[$key];
    }
    
    public function __set($key, $value) {
        $this->cache[$key] = $value; // save to cache
        DB::table('user_integrations')
            ->updateOrInsert(['name' => $key, 'user_id' => $this->userId], ['token' => $value]);
    }
    
}
