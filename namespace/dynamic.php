<?php

namespace Program {

    class App
    {

        public function package()
        {
            return __NAMESPACE__;
        }

    }

}

namespace {

    use Program\App;

    $className = "\Program\App";
    $app = new $className();

    var_dump($app);
    var_dump($app->package());
    var_dump(get_class($app));
    var_dump($app instanceof App);
}