<?php // vim:ts=4:sw=4:et:fdm=marker
/*
 * Undocumented
 *
 * @link http://agiletoolkit.org/
*//*
==ATK4===================================================
   This file is part of Agile Toolkit 4
    http://agiletoolkit.org/

   (c) 2008-2012 Romans Malinovskis <romans@agiletoolkit.org>
   Distributed under Affero General Public License v3 and
   commercial license.

   See LICENSE or LICENSE_COM for more information
 =====================================================ATK4=*/
/**
 * Thrown when some object was not initialized, set, assigned.
 * Not a fatal exception and usually used to change the direction of process flow
 * 
 * @author Camper (cmd@adevel.com) on 15.10.2009
 */
class Exception_NoObject extends Exception_InitError{}
