<?php

/*
 *
 *    _______                    _
 *   |__   __|                  (_)
 *      | |_   _ _ __ __ _ _ __  _  ___
 *      | | | | | '__/ _` | '_ \| |/ __|
 *      | | |_| | | | (_| | | | | | (__
 *      |_|\__,_|_|  \__,_|_| |_|_|\___|
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author TuranicTeam
 * @link https://github.com/TuranicTeam/Turanic
 *
 */

declare(strict_types=1);

namespace pocketmine\block;

class NetherBrickStairs extends Stair {

    protected $id = self::NETHER_BRICKS_STAIRS;

    public function __construct(int $meta = 0){
        $this->meta = $meta;
    }

    public function getName() : string{
		return "Nether Bricks Stairs";
	}

    public function getHardness() : float{
		return 2;
	}

    public function getToolType() : int{
		return BlockToolType::TYPE_PICKAXE;
	}
}