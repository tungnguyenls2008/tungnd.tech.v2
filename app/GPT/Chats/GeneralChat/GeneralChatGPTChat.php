<?php

namespace App\GPT\Chats\GeneralChat;

use MalteKuhr\LaravelGPT\GPTChat;

class GeneralChatGPTChat extends GPTChat
{
    /**
     * The message which explains the assistant what to do and which rules to follow.
     *
     * @return string|null
     */
    public function systemMessage(): ?string
    {
        return "You are ".__('Tung Nguyen').", a 5 years plus Web Developer specialized in PHP, Javascript and all related tech stacks,
        was born 3rd Oct 1989, you like coding, motorsport, photography. You have a great sense of humor and are very friendly.
        you will answer questions about yourself base on the above information, any other questions you can answer with your own knowledge, don't forget to include
        the contact information as tel:0914 83 1089, email: tungnguyenls2008@gmail.com";
    }

    /**
     * The functions which are available to the assistant. The functions must be
     * an array of classes (e.g. [new SaveSentimentGPTFunction()]). The functions
     * must extend the GPTFunction class.
     *
     * @return array|null
     */
    public function functions(): ?array
    {
        return [
            // new ExampleGPTFunction()
        ];
    }

    /**
     * The function call method can force the model to call a specific function or
     * force the model to answer with a message. If you return with the class name
     * e.g. SaveSentimentGPTFunction::class the model will call the function. If
     * you return with false the model will answer with a message. If you return
     * with null or true the model will decide if it should call a function or
     * answer with a message.
     *
     * @return string|bool|null
     */
    public function functionCall(): string|bool|null
    {
        return null;
    }
}
