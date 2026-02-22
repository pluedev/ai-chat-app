<?php

return [

    /*
    |--------------------------------------------------------------------------
    | OpenAI API Key
    |--------------------------------------------------------------------------
    |
    | You can set your OpenAI API key in the .env file:
    | OPENAI_API_KEY=sk-xxxx
    |
    */

    'api_key' => env('OPENAI_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Default model
    |--------------------------------------------------------------------------
    |
    | Set the default model to use if you want
    |
    */

    'model' => env('OPENAI_MODEL', 'gpt-4.1-mini'),

];