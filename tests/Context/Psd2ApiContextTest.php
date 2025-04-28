<?php
namespace bunq\test\Context;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
use bunq\Model\Generated\Endpoint\OauthClientApiObject;
use bunq\Util\BunqEnumApiEnvironmentType;
use bunq\Util\FileUtil;
use bunq\Util\SecurityUtil;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Tests:
 * ApiContext
 * BunqContext
 */
class Psd2ApiContextTest extends TestCase
{
    /**
     * File constants.
     */
    const FILE_TEST_CONFIGURATION = __DIR__ . '/../Resource/bunq-psd2-test.conf';
    const FILE_TEST_OAUTH = __DIR__ . '/../Resource/bunq-oauth-test.conf';
    const FILE_TEST_CERTIFICATE = __DIR__ . '/../Resource/certificate.cert';
    const FILE_TEST_CERTIFICATE_CHAIN = __DIR__ . '/../Resource/certificate.cert';
    const FILE_TEST_PRIVATE_KEY = __DIR__ . '/../Resource/key.pem';

    const TEST_DEVICE_DESCRIPTION = 'PSD2TestDevice';
    
    /**
     */
    public static function testApiContextCreateForPsd2()
    {
        if (file_exists(self::FILE_TEST_CONFIGURATION)) {
            $apiContext = ApiContext::restore(self::FILE_TEST_CONFIGURATION);
            BunqContext::loadApiContext($apiContext);

            static::assertNotNull($apiContext);
            return;
        }

        $apiContext = ApiContext::createForPsd2(
            BunqEnumApiEnvironmentType::SANDBOX(),
            SecurityUtil::getCertificateFromFile(self::FILE_TEST_CERTIFICATE),
            SecurityUtil::getPrivateKeyFromFile(self::FILE_TEST_PRIVATE_KEY),
            [
                SecurityUtil::getCertificateFromFile(self::FILE_TEST_CERTIFICATE_CHAIN),
            ],
            self::TEST_DEVICE_DESCRIPTION
        );
        $apiContext->save(self::FILE_TEST_CONFIGURATION);
        BunqContext::loadApiContext($apiContext);

        static::assertTrue(file_exists(self::FILE_TEST_CONFIGURATION));
    }

    /**
     */
    public static function testOauthClientCreate()
    {
        if (file_exists(self::FILE_TEST_OAUTH)) {
            $oauthClient = OauthClientApiObject::fromJsonFile(self::FILE_TEST_OAUTH);
            static::assertNotNull($oauthClient->getClientId());

            return;
        }

        try {
            $oauthClientId = OauthClientApiObject::create()->getValue();
            $oauthClient = OauthClientApiObject::get($oauthClientId)->getValue();

            static::assertNotNull($oauthClient);

            FileUtil::saveObjectAsJson(self::FILE_TEST_OAUTH, $oauthClient);
            static::assertTrue(file_exists(self::FILE_TEST_OAUTH));
        } catch (Exception $exception) {
            static::fail($exception->getMessage());
        }
    }
}
