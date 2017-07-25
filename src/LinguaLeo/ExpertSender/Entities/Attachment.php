<?php
namespace LinguaLeo\ExpertSender\Entities;

class Attachment
{
    protected $fileName;
    protected $mimeType;
    protected $content;

    public function __construct($fileName, $mimeType, $content)
    {
        $this->fileName = $fileName;
        $this->mimeType = $mimeType;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @return mixed
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }


}