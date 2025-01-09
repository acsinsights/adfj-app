<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\Http;

use Illuminate\Contracts\Validation\InvokableRule;

class TurnstileRule implements InvokableRule
{

    public function __invoke($attribute, $value, $fail)
    {
        $response = Http::post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => config('services.turnstile.secret_key'),
            'response' => $value,
        ]);
        $data = $response->json();
        if ($data["success"] === false) {
            $fail('Invalid captcha.');
        }
    }
}
