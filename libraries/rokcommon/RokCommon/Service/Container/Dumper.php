<?php

/*
 * This file is part of the symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * RokCommon_Service_Container_Dumper is the interface implemented by service container dumper classes.
 *
 * @package    symfony
 * @subpackage dependency_injection
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: Dumper.php 48519 2012-02-03 23:18:52Z btowles $
 */
interface RokCommon_Service_Container_Dumper
{
  function dump(array $options = array());
}
