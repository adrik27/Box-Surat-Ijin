<?php

namespace App\Rules;

use Closure;
use ReCaptcha\ReCaptcha;
use Illuminate\Contracts\Validation\ValidationRule;

class RecaptchaRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
        $response = $recaptcha->verify($value);

        if (!$response->isSuccess()) {
            throw new \Illuminate\Validation\ValidationException(['g-recaptcha-response' => 'The reCAPTCHA verification failed. Please try again.']);
        }
    }

    // public function message(): string
    // {
    //     return 'The reCAPTCHA verification failed. Please try again.';
    // }
}
