<?php

namespace CloudPlayDev\ConfluenceClient\Api;

class Restriction extends AbstractApi
{
    public function getByOperation(int $contentId)
    {
        $response = $this->httpGet(self::getRestfulUri('content', $contentId, 'restriction', 'byOperation'));

        $this->handleErrors($response);

        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }

    public function getForOperation(int $contentId, string $operationKey)
    {
        $response = $this->httpGet(self::getRestfulUri('content', $contentId, 'restriction', $operationKey));

        $this->handleErrors($response);

        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }

    public function update(int $conentId, array $restrictions)
    {
        $response = $this->httpPut(self::getRestfulUri('content', $conentId, 'restriction'), $restrictions);

        $this->handleErrors($response);

        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }
}
