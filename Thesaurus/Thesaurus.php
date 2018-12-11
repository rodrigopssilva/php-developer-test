<?php

class Thesaurus
{
    /**
     * @var array
     */
    private $thesaurus;

    /**
     * @param array $thesaurus
     */
    function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    /**
     * Returns the synonyms of the passed word
     *
     * @param string $word
     *
     * @return string
     */
    public function getSynonyms($word)
    {
        return json_encode(
            [
                'word' => $word,
                'synonyms' => $this->thesaurus[$word] ?? []
            ]
        );
    }
}