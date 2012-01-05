<?php

namespace Nodrew\Bundle\EmbedlyBundle\Factory;

use Nodrew\Bundle\EmbedlyBundle\Model\Response\ResponseInterface,
    Nodrew\Bundle\EmbedlyBundle\Exception\ServiceException;

/**
 * @package     NodrewEmbedlyBundle
 * @author      Drew Butler <drew@abstracting.me>
 * @copyright	(c) 2012 Drew Butler
 * @license     http://www.opensource.org/licenses/mit-license.php
 */
class ResponseFactory
{
    protected $validTypes = array('link', 'photo', 'video', 'rich', 'error');

    /**
     * Build the appropriate response object, based on the requirement.
     *
     * @param array $embedlyResponse
     * @return Nodrew\Bundle\EmbedlyBundle\Model\Response\ResponseInterface
     */
    public function buildResponse($embedlyResponse)
    {
        $type = $embedlyResponse['type'];
        if (!in_array($type, $this->validTypes)) {
            $type = 'generic';
        }

        $class   = 'Nodrew\\Bundle\\EmbedlyBundle\\Model\\Response\\'.ucfirst($type).'Response';
        $response = new $class;
        $response->map($embedlyResponse);

        return $response;
    }
}
