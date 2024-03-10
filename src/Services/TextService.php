<?php

namespace App\Services;

use phpDocumentor\Reflection\Types\True_;

class TextService
{
  public function toUpperCase(string $unechaine):string
  {

      return strtoupper($unechaine);
  }
  public function capitalizeFirst(string $uneChaine):string
  {
      return ucfirst($uneChaine);
  }
public function minimizeFirst(string $uneChaine):string
{

    return  lcfirst($uneChaine);
}




}