<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class DECPosition extends AbstractTag
{

    protected $Id = 50;

    protected $Name = 'DECPosition';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'DEC Position';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Exposure',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Contrast',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Saturation',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Filter',
        ),
    );
}
