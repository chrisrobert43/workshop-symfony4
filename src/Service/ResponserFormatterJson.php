<?php


namespace App\Service;


use Symfony\Component\HttpFoundation\Response;

class ResponserFormatterJson implements ResponserTypableFormatter
{
    public function format(string $content): Response
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($content);

        return $response;
    }

    public function type(): string
    {
        return 'json';
    }

}