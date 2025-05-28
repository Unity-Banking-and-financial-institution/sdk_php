<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\AttachmentPublicApiObject;
use bunq\Model\Generated\Endpoint\AttachmentPublicContentApiObject;
use bunq\Model\Generated\Endpoint\AvatarApiObject;
use bunq\test\BunqSdkTestBase;
use bunq\Util\FileUtil;

/**
 * Tests:
 *  AttachmentPublic
 *  AttachmentPublicContent Avatar
 */
class AvatarTest extends BunqSdkTestBase
{
    /**
     * Index number of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     *  Points to the directory where attachments are stored.
     */
    const PATH_ATTACHMENT = '/../../../resource/';

    /**
     * Tests the creation of a new avatar.
     */
    public function testCreateAvatar()
    {
        $fileContentsBefore = $this->getFileContentsOfAttachment();
        $customHeadersMap = [
            ApiClient::HEADER_ATTACHMENT_DESCRIPTION => $this->getAttachmentDescription(),
            ApiClient::HEADER_CONTENT_TYPE => $this->getAttachmentContentType(),
        ];

        $attachmentUuidBefore = AttachmentPublicApiObject::create(
            $fileContentsBefore,
            $customHeadersMap
        )->getValue();
        $avatarUuid = AvatarApiObject::create($attachmentUuidBefore)->getValue();

        $attachmentUuidAfter = AvatarApiObject::get($avatarUuid)->getValue();
        $imageInfoArray = $attachmentUuidAfter->getImage();
        $attachmentPublicUuid = $imageInfoArray[self::INDEX_FIRST]->getAttachmentPublicUuid();
        $fileContentsAfter = AttachmentPublicContentApiObject::listing($attachmentPublicUuid)
            ->getValue();

        static::assertEquals($fileContentsBefore, $fileContentsAfter);
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
