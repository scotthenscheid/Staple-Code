<?php
use Staple\DB;
/**
 * @author Ironpilot
 * @copyright Copyright (c) 2011, STAPLE CODE
 * 
 * This file is part of the STAPLE Framework.
 * 
 * The STAPLE Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by the 
 * Free Software Foundation, either version 3 of the License, or (at your option)
 * any later version.
 * 
 * The STAPLE Framework is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for 
 * more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with the STAPLE Framework.  If not, see <http://www.gnu.org/licenses/>.
 */
class indexController extends Controller
{
	public function _start()
	{
		$this->_openAll();
	}
	
	public function index()
	{
		return View::create('index');
	}
	
	public function documentation()
	{
		return View::create('documentation');
	}
	
	public function about()
	{
		return View::create('about');
	}
	
	public function license()
	{
		return View::create('license');
	}
}