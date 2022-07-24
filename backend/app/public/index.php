<?php

declare(strict_types=1);

class Gareth
{
  public function __construct(public string $name, public int $age)
  {
  }

  public function tellMeAboutYourself()
  {
    return $this->age - 5 . ' and he is called ' . $this->name;
  }
}

$g = new Gareth(age: 36, name: 'gareth');

echo $g->tellMeAboutYourself();
