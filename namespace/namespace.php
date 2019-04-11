<?php

namespace MyProject\App {

    class Program
    {

    }

}

namespace MyProject\Model {

    class Program
    {

    }

}

namespace MyProject {

    use MyProject\App\Program;

    class App
    {

        public function run(Program $program)
        {

        }

    }

    $app = new App();
    var_dump($app);

}