<?php

namespace App\Service;

use KnpU\LoremIpsumBundle\KnpUWordProvider;

final class CustomWordProvider extends KnpUWordProvider
{
    public function getWordList(): array
    {
        $words = parent::getWordList();
        $words[] = 'beach';
        return $words;
    }
}