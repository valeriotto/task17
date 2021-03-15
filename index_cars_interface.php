<?php

interface TransportInt
{
   public function move();
   public function turnOnWipers();
   public function honk();
}

class Transport implements TransportInt
{
   public function move()
   {
      $this->goAhead();
   }

   protected function goAhead(){}

   protected function honk(){echo $this->sound;}

   protected function useTheWipers(){}
}

class Car extends Transport
{
   protected $sound = 'гудок'; // защищеный класс
   protected $salon = 'кожа'; // индивидуализм отделка салона

   protected function move()
   {
      $this->goAhead();
      $this->goNitro();
   }

   protected function goNitro(){}
}

class Tank extends Transport
{
   protected $sound = 'выстрел';
   protected $salon = 'железо';

   protected function move()
   {
      $this->goAhead();
      $this->shooter();
   }

   protected function shooter(){}
}

class proffCar extends Transport
{
   protected $sound = 'сирена';
   protected $salon = 'алькантара';

   protected function move()
   {
      $this->goAhead();
      $this->useTheBucket();
   }

   protected function useTheBucket(){}
}
