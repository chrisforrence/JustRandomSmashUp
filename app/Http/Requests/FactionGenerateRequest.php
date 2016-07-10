<?php

namespace App\Http\Requests;

use App\Faction;
use App\Http\Requests\Request;
use Cache;

class FactionGenerateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
            'sets' => 'required|array',
            'players' => 'required|numeric|min:2|max:' . Cache::get('players.max', function() { return floor(Faction::count('id') / 2); })
        ];
    }
}
