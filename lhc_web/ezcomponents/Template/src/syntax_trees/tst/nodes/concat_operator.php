<?php
/**
 * File containing the ezcTemplateConcatOperatorTstNode class
 *
 * @package Template
 * @version 1.4.2
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Fetching of property value in an expression.
 *
 * @package Template
 * @version 1.4.2
 * @access private
 */
class ezcTemplateConcatOperatorTstNode extends ezcTemplateOperatorTstNode
{
    /**
     * Constructs a new ezcTemplateConcatOperatorTstNode.
     *
     * @param ezcTemplateSource $source
     * @param ezcTemplateCursor $start
     * @param ezcTemplateCursor $end
     */
    public function __construct( ezcTemplateSourceCode $source, /*ezcTemplateCursor*/ $start, /*ezcTemplateCursor*/ $end )
    {
        parent::__construct( $source, $start, $end,
                             7, 1, self::LEFT_ASSOCIATIVE,
                             '.' );
    }
}
?>
