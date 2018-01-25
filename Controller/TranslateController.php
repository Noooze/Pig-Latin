<?php


namespace Controller;

use Tool\PigLatinTranslator as Translator;


class TranslateController
{

    private $translator;

    public function __construct()
    {
        $this->translator = new Translator();
    }

    public function translate($word){

        $translated = $this->translator->translate($word);
        return $translated;
    }

}