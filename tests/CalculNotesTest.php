<?php

include "src/CalculNotes.php";
use PHPUnit\Framework\TestCase;

class CalculNotesTest extends TestCase{
   
    public function testGrauEstudiantPrimeraDivisio()
    {
        $nota = 90;
        $expected = 'Primera Divisió';

        $calcularNotas = new CalcularNotas($nota);
        $result = $calcularNotas->grauEstudiant($nota);

        $this->assertEquals($expected, $result);
    }

    public function testGrauEstudiantSegonaDivisio()
    {
        $nota = 55;
        $expected = 'Segona Divisió';

        $calcularNotas = new CalcularNotas($nota);
        $result = $calcularNotas->grauEstudiant($nota);

        $this->assertEquals($expected, $result);
    }

    public function testGrauEstudiantTerceraDivisio()
    {
        $nota = 38;
        $expected = 'Tercera Divisió';

        $calcularNotas = new CalcularNotas($nota);
        $result = $calcularNotas->grauEstudiant($nota);

        $this->assertEquals($expected, $result);
    }

    public function testGrauEstudiantReprovar()
    {
        $nota = 10;
        $expected = 'Lalumne ha de reprovar';

        $calcularNotas = new CalcularNotas($nota);
        $result = $calcularNotas->grauEstudiant($nota);

        $this->assertEquals($expected, $result);
    }

}
?>