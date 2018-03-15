<?php

namespace Secalith\Utilities;

class ArrayDigger
{
    protected $delimiter;

    public function extract(array $resource, $path, $delimiter = ".") {
        $pathExploded = explode($delimiter,$path);
        if ( ! empty($pathExploded)) {
            $copy = $resource;
            foreach($copy as $key=>$value) {
                if(isset($copy[$key])) {
                    $copy = $copy[$key];
                } else {
                    return null;
                }
            }
            return $copy;
        } else {
            return null;
        }
    }

    /**
     * @param mixed $delimiter
     * @return ArrayDigger
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

}
