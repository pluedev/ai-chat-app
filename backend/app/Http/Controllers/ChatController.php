<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        Log::info('Chat request received');
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        try {
            $response = OpenAI::responses()->create([
                'model' => config('openai.model'),
                'input' => $request->message,
            ]);

            $reply = $response->output[0]->content[0]->text ?? 'AI returned empty response';

            return response()->json([
                'reply' => $reply
            ]);

        } catch (\Exception $e) {
            Log::error('OpenAI API Error: '.$e->getMessage());

            return response()->json([
                'reply' => 'Something went wrong with AI API',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}