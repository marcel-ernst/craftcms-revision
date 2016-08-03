<?php
namespace Craft;

class RevisionVariable
{
    private $revisonString = NULL;
    private $lastTimeModified = NULL;

    public function get()
    {
        if(is_null($this->revisonString)) {
            $file = craft()->config->get('revisionFile', 'revision');
            $this->revisonString = IOHelper::getFileContents($file);
        }

        return $this->revisonString;
    }

    public function lastTimeModified()
    {
        if (!is_null($this->lastTimeModified)) {
            $file = craft()->config->get('revisionFile', 'revision');
            $this->lastTimeModified = IOHelper::getLastTimeModified($file);
        }

        return $this->lastTimeModified;
    }
}