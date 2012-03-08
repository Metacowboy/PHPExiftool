<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class BeamDose extends \PHPExiftool\Driver\Tag
{

    protected $Id = '300A,0084';

    protected $Name = 'BeamDose';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Beam Dose';

}