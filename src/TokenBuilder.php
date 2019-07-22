<?php

namespace Monyxie\Agora\TokenBuilder;

/**
 * Class TokenBuilder
 * @package Monyxie\Agora\TokenBuilder
 */
class TokenBuilder
{
    /**
     * @var
     */
    private $appId;
    /**
     * @var
     */
    private $appCertificate;

    /**
     * TokenBuilder constructor.
     * @param $appId
     * @param $appCertificate
     */
    public function __construct($appId, $appCertificate)
    {
        $this->appId = $appId;
        $this->appCertificate = $appCertificate;
    }

    /**
     * @param string|null $channelName
     * @param string|null $uid
     * @param array|null $privileges
     * @return Token
     */
    public function create(string $channelName = null, string $uid = null, array $privileges = null)
    {
        return new Token($this->appId, $this->appCertificate, $channelName, $uid, $privileges);
    }

    /**
     * @param $token
     * @param $appCertificate
     * @param $channel
     * @param $uid
     * @return Token
     */
    public function fromString($token, $appCertificate, $channel, $uid)
    {
        return Token::fromString($token)
            ->withAppCertificate($appCertificate)
            ->withChannelName($channel)
            ->withUid($uid);
    }
}
