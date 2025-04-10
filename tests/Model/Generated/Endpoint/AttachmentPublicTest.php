<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\AttachmentPublicApiObject;
use bunq\Model\Generated\Endpoint\AttachmentPublicContentApiObject;
use bunq\test\BunqSdkTestBase;
use bunq\Util\FileUtil;

/**
 * Tests:
 *  AttachmentPublic
 *  AttachmentPublicContent
 */
class AttachmentPublicTest extends BunqSdkTestBase
{
    /**
     *  Points to the folder where attachments are located.
     */
    const PATH_ATTACHMENT = '/../../../Resource/';

    /**
     * Check if the file send is indeed the same file we receive.
     */
    public function testCompareBeforeAndAfterBytes()
    {
        $beforeBytes = $this->getFileContentsOfAttachment();
        $customHeadersMap = [
            ApiClient::HEADER_CONTENT_TYPE => $this->getAttachmentContentType(),
            ApiClient::HEADER_ATTACHMENT_DESCRIPTION => $this->getAttachmentDescription(),
        ];

        $beforeUuid = AttachmentPublicApiObject::create($beforeBytes, $customHeadersMap)->getValue();
        $bytesAfter = AttachmentPublicContentApiObject::listing($beforeUuid)->getValue();

        static::assertEquals($beforeBytes, $bytesAfter);
    }

    /**
     * @return string
     */
    private function getFileContentsOfAttachment(): string
    {
        $path = __DIR__ . self::PATH_ATTACHMENT . $this->getAttachmentFilePath();

        return FileUtil::getFileContents($path);
    }
}
