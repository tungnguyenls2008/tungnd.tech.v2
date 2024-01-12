<?php

namespace App\Services;

use GuzzleHttp\Client;

class OpenAIService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENAI_API_KEY');
        $this->client = new Client();
    }

    public function generateResponse($prompt)
    {
        $response = $this->client->post('https://api.openai.com/v1/engines/gpt-3.5-turbo/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'prompt' => $prompt,
                'max_tokens' => 150
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
