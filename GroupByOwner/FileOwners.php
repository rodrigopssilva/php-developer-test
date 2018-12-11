<?php

class FileOwners
{
    /**
     * @param array $files
     * @return array
     */
    public static function groupByOwners($files)
    {
        $result = [];
        foreach ($files as $key => $owner) {
            $result[$owner][] = $key;
        }
        return $result;
    }
}