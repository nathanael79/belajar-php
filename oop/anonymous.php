<?php

interface Program
{

    function show(): string;

}

function showProgram(Program $program)
{
    var_dump($program instanceof Program);
    var_dump(get_class($program));
    var_dump($program->show());
}

showProgram(new class() implements Program
{

    function show(): string
    {
        return "Eko Kurniawan";
    }
});
