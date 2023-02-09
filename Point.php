<?php
class Point {
    private $x;
    private $y;

    /**
     * Point constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }





    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }


    /**
     * Apskaičiuokite taško atstumą nuo pradžios (0, 0).
     * @return float
     */
    public function distanceFromOrigin()
    {
        return sqrt($this->x**2+$this->y**2);
    }


    /**
     * Perkelia tašką dx ir dy vienetais.
     * @param int $tx
     * @param int $ty
     * @return void
     */
    public function push(int $tx, int $ty)
    {
        $this->x+=$tx;
        $this->y+=$ty;

    }


    /**
     * Pateikia tašką kaip string formatu [x, y].
     * @return string
     */
    public function __toString():string
    {
        return "[$this->x,$this->y]";
    }


    /**
     * Apskaičiuojamas atstumas tarp esamo taško ir kito taško p.
     * @param Point $p
     * @return float
     */
    public function distance(Point $p): float
    {
        $tx = $this->x - $p->getX();
        $ty = $this->y - $p->getY();
        return sqrt($tx**2 + $ty**2);
    }


    /**
     * Nustatykito taško vietą į naują x ir y koordinatę.
     * @param int $x
     * @param int $y
     * @return void
     */
    public function setLocation(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}