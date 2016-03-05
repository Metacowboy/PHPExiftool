<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Motorola;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Sensor extends AbstractTag
{

    protected $Id = 26206;

    protected $Name = 'Sensor';

    protected $FullName = 'Motorola::Main';

    protected $GroupName = 'Motorola';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Motorola';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Sensor';

    protected $flag_Permanent = true;

}
