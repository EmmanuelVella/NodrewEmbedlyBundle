<?php

namespace Nodrew\Bundle\EmbedlyBundle\Factory;

use Nodrew\Bundle\EmbedlyBundle\Model\Response\ObjectifyResponse,
    Nodrew\Bundle\EmbedlyBundle\Model\Response\ErrorResponse;

/**
 * @package     NodrewEmbedlyBundle
 * @author      Drew Butler <hi@nodrew.com>
 * @copyright	(c) 2012 Drew Butler
 * @license     http://www.opensource.org/licenses/mit-license.php
 */
class ObjectifyFactory implements ResponseFactoryInterface
{

    /**
     * {@inheritdoc}
     */
    public function buildResponse($embedlyResponse)
    {
        $response = $embedlyResponse['type'] != 'error' ? new ObjectifyResponse : new ErrorResponse;
        $response->map($embedlyResponse);

        return $response;
    }
}
