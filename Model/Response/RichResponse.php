<?php

namespace Nodrew\Bundle\EmbedlyBundle\Model\Response;

/**
 * @package		Embedly
 * @author		Drew Butler <drew@abstracting.me>
 * @copyright	(c) 2012 Drew Butler
 * @license		http://www.opensource.org/licenses/mit-license.php
 */
class RichResponse extends GenericResponseAbstract
{
    /**@#+
     * The internal object properties.
     */
    protected $html;
    protected $height;
    protected $width;
    /**@#-*/


    /**
     * Get the height property.
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Get the width property.
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Get the html property.
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }
    
    /**
     * {@inheritDoc}
     */
    protected function getFieldMappings()
    {
        return parent::getFieldMappings() + array(
            'html'   => 'html',
            'height' => 'height',
            'width'  => 'width',
        );
    }
}
