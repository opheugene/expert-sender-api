<?php
namespace LinguaLeo\ExpertSender\Chunks;

class AttachmentsChunk extends ArrayChunk
{

    const PATTERN = <<<EOD
<Attachments>
            %s
</Attachments>
EOD;

    /**
     * @return string
     */
    protected function getPattern()
    {
        return self::PATTERN;
    }

}