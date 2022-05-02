<?php

namespace App\Service;


use KnpU\LoremIpsumBundle\KnpUWordProvider;
use KnpU\LoremIpsumBundle\WordProviderInterface;

final class CustomWordProvider extends KnpUWordProvider implements WordProviderInterface
{
    public function getWordList(): array
    {
        $words = parent::getWordList();
        $words[] = 'beach';
        return $words;
    }
}