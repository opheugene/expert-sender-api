<?php
namespace LinguaLeo\ExpertSender\Chunks;

use LinguaLeo\ExpertSender\Entities\Attachment;
use LinguaLeo\ExpertSender\ExpertSenderException;

class AttachmentChunk implements ChunkInterface
{

    const PATTERN = <<<EOD
        <Attachment>
            <FileName>%s</FileName>
            <MimeType>%s</MimeType>
            <Content>%s</Content>
        </Attachment>
EOD;

    /** @var Attachment */
    protected $attachment;

    public function __construct(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }

    public function getText()
    {
        return sprintf(
            self::PATTERN,
            $this->attachment->getFileName(),
            $this->attachment->getMimeType(),
            $this->attachment->getContent()
        );
    }

}