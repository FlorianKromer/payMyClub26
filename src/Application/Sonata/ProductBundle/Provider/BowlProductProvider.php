<?php
/*
 * This file is part of the sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\ProductBundle\Provider;

use Sonata\ProductBundle\Model\BaseProductProvider;

/**
 * This file has been generated by the EasyExtends bundle ( http://sonata-project.org/easy-extends )
 *
 * References :
 *   custom repository : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en#querying:custom-repositories
 *   query builder     : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/query-builder/en
 *   dql               : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/dql-doctrine-query-language/en
 *
 * @author <yourname> <youremail>
 */
class BowlProductProvider extends BaseProductProvider
{
    /**
     * {@inheritDoc}
     */
    public function getBaseControllerName()
    {
        return 'SonataProductBundle:Bowl';
    }
}
