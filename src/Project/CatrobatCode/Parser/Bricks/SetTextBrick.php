<?php

namespace App\Project\CatrobatCode\Parser\Bricks;

use App\Project\CatrobatCode\Parser\Constants;

class SetTextBrick extends Brick
{
  protected function create(): void
  {
    $this->type = Constants::SET_TEXT_BRICK;
    $this->caption = 'Set Text';
    $this->setImgFile(Constants::MOTION_BRICK_IMG);
  }
}
