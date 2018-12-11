<?php

class OddNumber
{
    /**
     * @var int[]
     */
    private $numbers;

    /**
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function find()
    {
        $result = 0;
        foreach ($this->numbers as $key => $value) {
            $result = $result ^ $value;
        }

        if (!$result) {
            throw new \Exception('Number not found');
        }

        return $result;
    }
}